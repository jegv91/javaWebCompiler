CREATE DATABASE IF NOT EXISTS webCompiler;
USE webCompiler;
CREATE TABLE IF NOT EXISTS example(
	id_example INT NOT NULL AUTO_INCREMENT,
	title VARCHAR(255) NOT NULL,
	description VARCHAR(255) NOT NULL,
	source_code TEXT NOT NULL,
	PRIMARY KEY(id_example)
)ENGINE=InnoDB;


/*INSERTS*/
INSERT INTO `webCompiler`.`example` (`id_example`, `title`, `description`, `source_code`) VALUES (NULL, 'Hello world!', 'The classic one, this is a must in every cases.', 'public class HelloWorld {
     public static void main(String[] args){
    System.out.println("Hello world!!");
}
}'), (NULL, 'Sum of integers', 'Program to sum two integers and print the result', 'public class SumOfIntegers{
     public static void main(String[] args){
    int a = Integer.parseInt(args[0]);
    int b = Integer.parseInt(args[1]);
    System.out.println("The sume of " + a + " and " + b + " is " + (a+b) );
}
}');