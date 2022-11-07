# Balance-Chaves
Função para validar o equilíbrio entre as chaves abertas, recebe uma string de colchetes como entrada e determina se a
ordem dos parênteses é válido. Um colchete é considerado qualquer um dos seguintes caracteres: (, ), {, }, [, ou ].


Dizemos que uma sequência de colchetes é válida se as seguintes condições forem
atendidas:
● Não contém colchetes sem correspondência.
● O subconjunto de colchetes dentro dos limites de um par de colchetes correspondente é
também um par de colchetes.
Exemplos:
● (){}[] é válido
● [{()}](){} é válido
● []{() não é válido
● [{)] não é válido

solução no arquivo balance.php
