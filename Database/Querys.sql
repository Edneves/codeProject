--QUERYS PARA CONSULTAS COMPRA POR ID DE CLIENTE

select com.id as 'id da compra', cli.id as 'id do cliente' 
from compra as com 
inner join cliente as cli
on cli.id = com.idCliente; 


--CHECANDO QUAL COMPRA O CLIENTE O CLIENTE FEZ POR ID

select com.id as 'id da compra', cli.id as 'id do cliente' 
from compra as com 
inner join cliente as cli
on cli.id = com.idCliente 
where cli.id is not null
and cli.id = 9;

use projetoWeb
--CONSULTANDO PRODUTOS POR ID DO CLIENTE NA COMPRA

select com.id as 'id da compra', cli.id as 'id do cliente', car.nProd as 'produtos' 
from compra as com 
inner join cliente as cli
on cli.id = com.idCliente
inner join carrinho as car
on car.idCliente = cli.id
where cli.id is not null;


--UPDATE DE QTD PRODUTO
UPDATE `projetoWeb`.`estoque` SET `qtd`='50' WHERE `idestoque`='8';


--CONSULTA QTD PRODUTO
select nome, qtd from produto inner join estoque on idQtd = idestoque;



--UPDATE DE PROCO DE PRODUTO
UPDATE `projetoWeb`.`produto` SET `preco`='6.0' WHERE `codigo`='7';

