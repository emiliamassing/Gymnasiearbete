<?php

class CFormCreator
{
    public function __construct(CApp &$app)
    {
        $this->m_app = $app;
    }

    public function open()
    {
        echo('<form method="post" class="postingForm">');
    }

    public function close()
    {
        echo('</form>');
    }

    public function openFormContainer()
    {
        echo('<div class="formContainer">');
    }

    public function closeDiv()
    {
        echo('</div>');
    }

    public function createSubmit(string $label)
    {
        echo('<div class="formGroup">');
        echo('<input type="submit" value="'. $label . '"/>');
        echo('</div>');
    }

    public function createText(string $name, string $label)
    {
        $this->createInputOfType("text", $name, $label);
    }

    public function createTextArea(string $name, string $label)
    {
        echo('<div class="formGroup">');
        echo('<label for="'. $name .'">' . $label . '</label>');
        echo('<textarea name="'. $name .'" id="' . $name .'"></textarea>');
        echo('</div>');
    }

    public function createSelect(string $name, string $label, array $options)
    {
        /* Skriv ut select elementet inklusive name och id
        Loopa igenom options och skriv ut varje
        Stäng select*/
        $options = array("SELECT * FROM categories");

        echo('<div class="formGroup>"');
        echo('<label for="' . $name . '">' . $label . '</label>');
        echo('<select id"'. $name . '" id="' . $name . '">');
            foreach($options as $value)
            {
                echo('<option value="' . $value . '"> "' . $value .'" ');
                echo('</option>');
            }
        echo('</select>');
        echo('</div>');
    }

    public function createPassword(string $name, string $label)
    {
        $this->createInputOfType("password", $name, $label);
    }

    public function createEmail(string $name, string $label)
    {
        $this->createInputOfType("email", $name, $label);
    }

    public function createInputOfType(string $type, string $name, string $label)
    {
        echo('<div class="formGroup">');
        echo('<label for="'. $name .'">' . $label . '</label>');
        echo('<input type="'. $type .'" id="'. $name .'" name="'. $name .'" class="formControl" />');
        echo('</div>');
    }

	///////////////// Member variables ///////////////////////
	private $m_app = NULL;
};

?>