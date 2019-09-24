<?php
include '../../conexao/Conexao.php';

class UserObject {	
	public $id;
	public $name;
	public $email;
	public $password;
	public $authority;
}

class AuthorityObject {	
	public $id;
	public $name;
}

class User extends Conexao{
	public $id;
	public $name;
	public $email;
	public $password;
	public $authority;

    public function insert($obj){
    	$sql = "INSERT INTO users(name,email,password,id_authority) VALUES (:name,:email,:password,:id_authority)";
    	$consulta = Conexao::prepare($sql);
		$consulta->bindValue('name',  $obj->name);
		$consulta->bindValue('email',  $obj->email);
		$consulta->bindValue('password',  $obj->password);
		$consulta->bindValue('id_authority',  $obj->authority->id);
    	return $consulta->execute();
	}

	public function update($obj,$id = null){
		$sql = "UPDATE users SET name = :name, email = :email, password = :password, id_authority = :id_authority WHERE id = :id ";
		$consulta = Conexao::prepare($sql);
		$consulta->bindValue('name',  $obj->name);
		$consulta->bindValue('email',  $obj->email);
		$consulta->bindValue('password',  $obj->password);
		$consulta->bindValue('id_authority',  $obj->authority->id);
		$consulta->bindValue('id', $id);
		return $consulta->execute();
	}

	public function delete($id = null){
		$sql = "DELETE FROM users WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta->bindValue('id', $id);
		$consulta->execute();
		return $consulta->fetchAll();
	}

	public function findAll(){
		$sql = "SELECT users.id as u_id, users.name as u_name, users.email as u_email, users.password as u_password, authority.id as a_id, authority.name as a_name FROM users INNER JOIN authority ON authority.id = users.id_authority";
		$consulta = Conexao::prepare($sql);
		$consulta->execute();
		$users = array();
		while (($row = $consulta->fetch(PDO::FETCH_ASSOC)) !== false) {
			$user            = new UserObject();
			$user->id        = $row['u_id'];
			$user->name      = $row['u_name'];
			$user->email     = $row['u_email'];
			$user->password  = $row['u_password'];
			$authority       = new AuthorityObject();
			$authority->id   = $row['a_id'];
			$authority->name = $row['a_name'];
			$user->authority      = $authority;
			$users[] = $user;
		}

		return $users;
	}

}

?>