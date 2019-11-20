<?php
include '../../conexao/Conexao.php';

class PostsObject {	
	public $id;
	public $title;
	public $description;
	public $category;
	public $company;
	public $answers;
}

class CategoryObject {	
	public $id;
	public $name;
	public $color;
}

class CompanyObject {	
	public $id;
	public $name;
}

class AnswerObject {	
	public $id;
	public $answer;
	public $field;
}

class FieldObject {	
	public $id;
	public $name;
}

class Post extends Conexao{
	public $id;
	public $title;
	public $description;
	public $category;
	public $company;
	public $answers;

    public function insert($obj){
		$sql = "INSERT INTO post(title,description,id_user,id_category,id_company) VALUES (:title,:description,:id_user,:id_category,:id_company)";
		$sqlAnswer = "INSERT INTO answer(answer,id_post,id_field) VALUES (:answer,:id_post,:id_field)";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('title',  $obj->title);
		$consulta->bindValue('description',  $obj->description);
		$consulta->bindValue('id_user', 9);
		$consulta->bindValue('id_category',  $obj->category->id);
		$consulta->bindValue('id_company',  $obj->company->id);
		$consulta->execute();
		$consulta = Conexao::prepare("SELECT LAST_INSERT_ID()");
		$consulta->execute();
        $post = $consulta->fetch(PDO::FETCH_ASSOC); 
		foreach ($obj->answers as $answer) {
			$consulta = Conexao::prepare($sqlAnswer);
			$consulta->bindValue('answer',  $answer->answer);
			$consulta->bindValue('id_post',  $post['LAST_INSERT_ID()']);
			$consulta->bindValue('id_field',  $answer->field->id);
			$consulta->execute();
		}
	}

	public function update($obj,$id = null){
		$sql = "UPDATE post SET name = :name, email = :email, password = :password, id_authority = :id_authority WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('name',  $obj->name);
		$consulta->bindValue('email',  $obj->email);
		$consulta->bindValue('password',  $obj->password);
		$consulta->bindValue('id_authority',  $obj->authority->id);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($id = null){
		$sql = "DELETE FROM post WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id', $id);
		$consulta->execute();
		return $consulta->fetchAll();
	}

	public function findAll($obj){
		$sql = "SELECT post.id as p_id, post.title as p_title, post.description as p_description, category.id as c_id, category.name as c_name, category.color as c_color, company.id as co_id, company.name as co_name FROM post INNER JOIN category ON category.id = post.id_category INNER JOIN company ON company.id = post.id_company";
		if($obj.id != null) {
			$sql = $sql . ' where company.id = '. $obj.id;
		}
		$sqlAnswer = "SELECT answer.id as a_id, 
		answer.answer as a_answer,
		field.id as f_id,
		field.name as f_name
		FROM answer 
		INNER JOIN field ON field.id = answer.id_field
		WHERE answer.id_post = :id_post";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		$posts = array();
		while (($row = $consulta->fetch(PDO::FETCH_ASSOC)) !== false) {
			$post                  = new PostsObject();
			$post->id              = $row['p_id'];
			$post->title           = $row['p_title'];
			$post->description     = $row['p_description'];
			$category              = new CategoryObject();
			$category->id          = $row['c_id'];
			$category->name        = $row['c_name'];
			$category->color       = $row['c_color'];
			$company               = new CompanyObject();
			$company->id           = $row['co_id'];
			$company->name         = $row['co_name'];
			$post->category        = $category;
			$post->company         = $company;
			$post->answers         = array();
			$posts[]               = $post;
		}

		foreach ($posts as $p) {
			$consulta = Conexao::prepare($sqlAnswer);
			$consulta->bindValue('id_post', $p->id);
			$consulta->execute();
			while (($row = $consulta->fetch(PDO::FETCH_ASSOC)) !== false) {
				$answer                = new AnswerObject();
				$answer->id            = $row['a_id'];
				$answer->answer        = $row['a_answer'];
				$field                 = new FieldObject();
				$field->id             = $row['f_id'];
				$field->name           = $row['f_name'];
				$answer->field         = $field;
				$p->answers[]          = $answer;
			}
		}

		return $posts;
	}

}

?>