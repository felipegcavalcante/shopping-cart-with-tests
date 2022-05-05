# Shopping Cart With Tests

## 1. Temas Abordados

* Testes automatizados
* PHPUnit
* PSR-12
* Tell, don't ask
* Primitive obsession
* Lei de Demeter

## 2.Problema

### Contexto

Implementar um mecanismo de carrinho de compra que permita as operações de (1) adicionar um item, (2) remover um item, (3) listar os itens existentes no carrinho, (4) mostrar a quantidade de itens e (5) mostrar o valor total. Um item deve ser composto por um produto, uma quantidade e um valor de desconto. E, por fim, um produto deve ser composto por um id, uma descrição e um valor.

Recomenda-se iniciar a implementação de forma mais simples e, aos poucos, torná-la mais robusta. É necessário utilizar testes automatizados para garantir o funcionamento correto da implementação e de potenciais modificações. Recomenda-se ainda levar em consideração todo o aprendizado relacionado a orientação a objetos, princípios e boas práticas.

## 3. Sugestão de Implementação

- ShoppingCart
    - addItem
    - removeItem
    - listItems
    - numberOfItems
    - getTotal
- Item
    - product - product
    - quantity - 3
    - discount - 10.0
- Product
    - id - 1
    - description - Chocolate Snickers
    - price - 2.5

### 4. Evolução da Implementação

Considerar utilizar objetos de valor para evitar tipos primitivos na implementação.