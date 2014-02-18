<?php
class mammifero
{
    private $name;
    private $element;

    public function getName()
    {
    return $this->name;
    }
    protected function setName($n)
    {
        $this->name=$n;
    }
    public function getElement()
    {
        return $this->element;
    }
    protected function setElement($e)
    {
        $this->element=$e;
    }
}
class cane extends mammifero
{
    public function __construct($n)
    {
        $this->setName($n);
        $this->setElement("Terra");
    }
}
class belena extends mammifero
{
    public function __construct($n)
    {
        $this->setName($n);
        $this->setElement("Acqua");
    }
}
?>
<html>
<head>
    <title>Classi Ereditarietà</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Classi Ereditarietà</h2>
<?php include 'include_menu.php'; ?>
<hr>
<p>Note</p>
<hr>
<br>
<?php
    $mydog = new cane("Mirka");
    print("il mio cane " . $mydog->getName() . " vive nell'elemento " . $mydog->getElement() . "<br>");

    $mywhale = new belena("Jona");
    print("il mio balena " . $mywhale->getName() . " vive nell'elemento " . $mywhale->getElement() . "<br>");
?>
<br>
<hr>

</body>
</html>