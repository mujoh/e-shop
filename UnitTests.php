<?php
use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{

    public function testFailure()
    {
        $this->assertFileExists('D:\wamp64\www\e-shop\controller\connect.php');
    }

    public function testCount()
    {
        $post = count($_POST);
        if($post > 0) {
		
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $comments = $_POST['comments'];
            $header = "Content-Type: text/html\r\nReply-To: $email\r\nFrom: $name <$email>";
            
            $body = 
            @"Email sent from ".$_SERVER['REMOTE_ADDR']." at ".date("d/m/Y H:i",time())."<br />
            <hr />
            $comments
            <hr />
            Email end";
            
            if(mail("m.hadzimehanovic@gmail.com", $subject, $body, $header)) {
                die("true");	
            } else {
                die("There was an error sending the email.");	
            }
        }

        $this->assertGreaterThan(0, $post);
    }

    public function testDelete()
    {
        if($action == "delete")
        {
            $id = $_POST['id'];
            
            $queryDelete = "DELETE FROM products WHERE product_id=".$id;
            mysqli_query($con, $queryDelete);

            $this->assertNotEmpty([$id]);
        }

        
    }
}
?>