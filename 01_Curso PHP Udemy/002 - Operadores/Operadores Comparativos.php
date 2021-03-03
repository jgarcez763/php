01
<?php
02
/**
03
 * Igual
04
 */
05
var_dump( 7 == 7 ); // TRUE, são iguais
06
 
07
var_dump( 7 == 6 ); // FALSE, são diferentes
08
 
09
/**
10
 * Diferente
11
 */
12
var_dump( 7 != 7 ); // FALSE, pois não são diferentes
13
 
14
var_dump( 7 != 6 ); // TRUE, pois são diferentes
15
 
16
// Segundo operador diferente
17
var_dump( 7 <> 7 ); // FALSE, pois não são diferentes
18
 
19
var_dump( 7 <> 6 ); // TRUE, pois são diferentes
20
 
21
/**
22
 * Idêntico
23
 */
24
var_dump( 7 === 7 ); // TRUE, pois são iguais e do mesmo tipo, inteiros
25
 
26
var_dump( 7 === 7.0 ); // FALSE, pois não são do mesmo tipo
27
 
28
/**
29
 * Não idêntico
30
 */
31
var_dump( 7 !== 7 ); // FALSE, pois são iguais e do mesmo tipo, inteiros
32
 
33
var_dump( 7 !== 7.0 ); // TRUE, pois não são do mesmo tipo
34
 
35
/**
36
 * Menor que
37
 */
38
var_dump( 7 < 8 ); // TRUE, 7 é menor que 8
39
 
40
var_dump( 7 < 6 ); // FALSE, 7 não é menor que 6
41
 
42
/**
43
 * Maior que
44
 */
45
var_dump( 7 > 6 ); // TRUE, 7 é maior que 6
46
 
47
var_dump( 7 > 8 ); // FALSE, 7 não é maior que 8
48
 
49
/**
50
 * Menor ou igual
51
 */
52
var_dump( 7 <= 7 ); // TRUE, 7 é igual a 7
53
 
54
var_dump( 7 <= 6 ); // FALSE, 7 não é menor nem igual a 6
55
 
56
var_dump( 3 <= 7 ); // TRUE, 3 é menor que 7
57
 
58
/**
59
 * Maior ou igual
60
 */
61
var_dump( 7 >= 7 ); // TRUE, 7 é igual a 7
62
 
63
var_dump( 7 >= 8 ); // FALSE, 7 não é maior nem igual a 8
64
 
65
var_dump( 10 >= 7 ); // TRUE, 10 é maior que 7
66
 
67
?>
