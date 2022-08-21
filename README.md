# Prueba desarrolladores 2
 Tiene como objetivo encontrar los numeros perfectos en unos rangos de numeros dados internamente.
  
Los numeros perfectos son números entero positivo iguales a la suma de sus divisores positivos.

Escogi desarrollar en PHP por familiaridad.
Cree una clase llamada rango la cual recogia el numero de rango inicial y el numero de rango final.
Posterior hice una clase para guardar una lista de varios rangos predefinidos internamente llamada Lrangos.
Asi mismo una funcion llamada cal_perf la cual calcula mediante un for los divisores exactos de un numero y retorna la igualdad del numero dado con la suma de los divisores.
Seguido cree otra funcion llamada Cal_rango la cual pasaba por un while un rango de datos establecido, ejecutaba la anterior funcion Cal_perf desde el rango inicial la cual pasaba por una validacion, en caso de que la validacion fuese verdadera listaba el numero perfecto y pasaba al siguiente incrementando el rango inicial, en caso de que no simplemente incrementaba el rango inicial al siguiente numero.
por ultimo hice un index el cual creaba un objeto de tipo lista, la recorria con un ForEach, ejecutando la funcion Cal_rango respectiva de cada rango y la imprimia en pantalla.
