<?php

class CPosts
{
    public function __construct(CApp &$app)
    {
        $this->m_app = $app;
    }

    public function __destruct()
    {
        
    }

    private function validateForm(array $data)
    {
        $this->m_validationErrors = [];
        if(strlen($data["text"]) < 5)
        {
            $this->m_validationErrors[] = "Ditt inlägg är för kort. Du behöver minst 5 tecken.";
            return false;
        }
        if(empty($data["subject"]))
        {
            $this->m_validationErrors[] = "Du måste ha en rubrik";
            return false;
        }
        return true;
    }

    private function storeForm(array $data)
    {
        $data["date"] = time();
        $data["author"] = "Emilia";
        $query = "INSERT INTO `posts` ( `category`, `subject`, `text`, `date`, `author`) VALUES ('". $data["category"] . "', '" . $data["subject"] . "', '" . $data["text"] . "', '" . $data["date"] . "', '" . $data["author"] . "');";

        $this->m_app->db()->query($query);
    }

    public function selectCategories()
    {
        $query = "SELECT * FROM `posts`";
        $query ="";
    }

    public function validateAndStoreForm()
    {
        if(empty($_POST))
            return;
        if($this->validateForm($_POST))
        {
            $this->storeForm($_POST);
        }
        else
        {
            echo("Det finns fel i inmatningen.");
            print_r($this->m_validationErrors);
        }
    }

    public function renderNewsItem(array $newsItem)
    {
        $dateText = date("j F o, H:i", $newsItem["date"]);
        ?>
            <div class="newsItem">
                <h2><?php echo($newsItem["subject"]); ?></h2>
                <div class="date"><?php echo($dateText); ?></div>
                <div class="category"><?php echo($newsItem["category"]); ?></div>
                <div class="text"><?php echo(nl2br($newsItem["text"])); ?></div>

                <div class="author"><?php echo($newsItem["author"]); ?></div>
            </div>
        <?php
    }

    public function selectAndRenderAllNewsItems()
    {
        $result = $this->m_app->db()->selectAll("posts", "ORDER BY id DESC");

            if($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc())
                {
                    $this->renderNewsItem($row);
                }
            }
            else
            {
                echo("Det finns inga inlägg");
            }
    }

    ///////////////// Member variables ///////////////////////
    private $m_validationErrors = [];
    private $m_app = null;
};

?>