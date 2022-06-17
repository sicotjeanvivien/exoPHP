<?php
class Point
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return string
     */
    public function  affiche(): string
    {
        return "x = $this->x , y = $this->y";
    }

    /**
     * @param int $tx
     * @param int $ty
     */
    public function  translater(int $tx, int $ty): void
    {
        $this->x += $tx;
        $this->y += $ty;
    }
}

$point = new Point(2, 3);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?php echo $point->affiche(); ?></p>
    <?php  $point->translater(3, 2); ?>
    <p><?php echo $point->affiche(); ?></p>
</body>

</html>