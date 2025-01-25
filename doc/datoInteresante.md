en la practica del arreglo del examen final al momento de querer agragar 
con la funcion array_push y modificar el arreglo este no me dejaba 
investigue y eso se debia ya que una funcion es separada de otra y esta 
no se puede modificar ala par al menos de que pongas en la variable del array 
donde quieres que se modifique el simbolo [&] este es muy importante para ese motivo.


= (asignacion)
== (comparacion)


El ampersand (&) en PHP se utiliza para pasar una variable por referencia en lugar de pasarla por valor. Esto significa que, en lugar de trabajar con una copia de la variable original dentro de una función, trabajarás directamente con la variable original. Los cambios realizados en la función afectarán a la variable fuera de ella.