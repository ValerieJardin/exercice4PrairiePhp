<?php
for ($nombre=1; $nombre <= 100 ; $nombre++)
{
  if ($nombre%5 == 0 && $nombre%3 == 0)
  {
    echo "FizzBuzz ";
  }
  else if ($nombre%3 == 0)
  {
    echo "Fizz ";
  }
  else if ($nombre%5 == 0)
  {
    echo "Buzz ";
  }
  else
  {
    echo "$nombre ";
  }
}
?>
