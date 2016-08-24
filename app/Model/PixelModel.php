<?php

namespace Model;
use \W\Model\Model;

class PixelModel extends Model{

	public function next($id)
	{
		$query = $this->dbh->prepare('SELECT * FROM pixelart WHERE id = (SELECT MIN(id) FROM pixelart WHERE id > :id) ');
		$query->bindValue(':id', $id, \PDO::PARAM_INT);
		$query->execute();
		return $query->fetch();
	}

	public function prev($id)
	{
		$query = $this->dbh->prepare('SELECT * FROM pixelart WHERE id = (SELECT MAX(id) FROM pixelart WHERE id < :id) ');
		$query->bindValue(':id', $id, \PDO::PARAM_INT);
		$query->execute();
		return $query->fetch();
	}
}