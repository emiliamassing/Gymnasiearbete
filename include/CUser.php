<?php

class CUser
{
	public function __construct(CApp &$app)
	{
        $this->m_app = $app;
	}

    public function isLoggedIn()
    {
        return isset($_SESSION["loggedIn"]); //samma princip som med if och else

    }

    private function findAndLoginUser(string $username, string $password)
	{
		$query = "SELECT * FROM USERS WHERE username='$username'";
		$result = $this->m_app->db()->query($query);
		
		if($result->num_rows == 0)
		{
			die("Felaktig inloggning");
		}
		else // Användare hittad!
		{	
			$userData = $result->fetch_assoc();
			//print_r_pre($userData);
			//die();
            

			if(password_verify($password, $userData["password"]))
			{
				$_SESSION["loggedIn"] = true;
				$_SESSION["user"] = $username;
				redirect("welcome.php");
				
			}
			else
			{
				die("Felaktigt lösenord");
			}
			
		}
	}

    public function handleLogInAttempt()
    {
        if(!empty($_POST)) //Används inprincip alltid för att avläsa formulär
        {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $this->findAndLoginUser($username, $password);
        }
    }

    public function logout()
    {
        
        unset($_SESSION["loggedIn"]);
    }

    public function renderLoginForm()
    {
        ?>
        <form class="posting-form" method="post">
            <h2>Logga in</h2>
            <div class="form-group">
                <label for="username">Ange användarnamn: </label>
                <input type="text" id="username" name="username" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="password">Ange lösenord: </label>
                <input type="password" id="password" name="password" class="form-control">                              
            </div>

            <div class="form-group">
                <button type="submit" value="posta" class="form-control">Logga in</button>
            </div>
        </form>
        <?php
    }

    ///////////////// Member variables ///////////////////////
	private $m_app = NULL;
};


?>