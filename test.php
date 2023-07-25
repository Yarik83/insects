<?
/* Принимаем данные из формы */
  $id = $_POST["id"];
  $name = $_POST["name"]; 
  $email = $_POST["email"];
  $text_message = $_POST["message"];

/* Подключаемся к БД */
$db=mysqli_connect("website", "root","", "insect"); 
 
/* Записываем данные из формы в БД */
$sql = "INSERT INTO insect(name, email, message) VALUES ('$name', '$email', '$text_message')";
$result=mysqli_query($db, $sql);



/* Подключаемся к базе данных */
$db=mysqli_connect("website", "root","", "insect");

/* Выбираем данные */
$sql="SELECT id, name, email, message FROM insect";
$result=mysqli_query($db, $sql);

/* Разбираем данные и выводим под формой*/
while ($line=mysqli_fetch_row($result)) {
echo "<b>Id:</b>".$line[0]."<br>";
echo "<b>Имя:</b>".$line[1]."<br>";
echo "<b>Email:</b>".$line[2]."<br>";
echo "<b>Сообщение:</b>".$line[3]."<br>";
}
?>