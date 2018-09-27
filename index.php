<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <script type="text/javascript">

//Cartera + dinero + juego
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
  alert("Gracias por jugar.");

      } else if (ronda>=ronda) {
        var dado2 = Math.floor((Math.random() * 6) + 1);
  alert("tu dinero actual de la cartera es " + cartera1);
      if (cartera1<0) {
          alert("No tienes dinero suficente. Gracias por jugar")

      }
  var dinero4 = parseInt(prompt("¿Cuánto dinero quieres apostar de la cartera?"));
  var dincasino2 =  dinero4;
  if (dinero4>cartera1) {
    alert("No dispones de tanto dinero en la cartera");


  } else if (dado2>3) {
    dinero5 = (dinero4 - dincasino2) ;

     cartera2 = (cartera1 - (dinero4 + dincasino2));


  } else if (dado2<4) {
    (dinero5 = (dinero4  + dincasino2)) ;

     cartera2 =  (cartera1  + (dinero4 - dincasino2));

  }

if (cartera2===0) {
  alert(dado2)
  alert("tu dinero es 0. Se acabo.")
} else {
  alert(dado2)
  var cartera2=(cartera1 + dinero5);
  alert("Tu dinero actual es " + dinero5 + "€" );
  alert("Tu dinero en la cartera es de " + cartera2 + "€");
}







      }

     </script>

   </body>
 </html>
