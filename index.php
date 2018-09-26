<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <script type="text/javascript">


var dado = Math.floor((Math.random() * 6) + 1);
var cartera = parseInt(prompt("Añade saldo a tu cartera"));
alert("Normas del juego, si sale 4,5,6 gana el casino, si sale 1,2,3 ganas tú. La apuesta del casino es la misma que la tuya. No puedes apostar mas de 50€");
var dinero = parseInt(prompt("Introduce tu dinero de juego "));
var dincasino =  dinero;
var dineroactual = 50;


if(cartera < dinero) {

        alert("No puedes usar esa cantidad porque supera tu limite")
      }

else {
        alert("Tu apuesta es" + " " + dinero + "€" );

       if (dado > 3) {

         (dinero2 = (dinero - dincasino)) ;

          cartera1 = (cartera - (dinero2 + dincasino));

    } else if (dado < 4) {

           (dinero2 = (dinero  + dincasino)) ;

            cartera1 =  (cartera  + (dinero2 - dincasino));


         };

      alert("Salio" + " " + dado);
      alert("Tu dinero actual es " + dinero2 + "€" );
      alert("Tu dinero en la cartera es de " + cartera1 + "€");

      var dinero3=dinero2;

      }

      //Rondas

      var ronda = parseInt(prompt("¿Cuantas veces deseas repetir el juego?"));
      if (ronda<=0) {
      alert("Gracias por jugar.")

              }

     </script>

   </body>
 </html>
