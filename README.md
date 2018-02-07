# MVC - Model-view-controller

Model-view-controller (MVC), é um padrão de arquitetura de software (Não confundir com um design pattern) que separa a representação da informação da interação do usuário com ele. O model consiste nos dados da aplicação, regras de negócios, lógica e funções. Uma view pode ser qualquer saída de representação dos dados, como uma tabela ou um diagrama. É possível ter várias visões do mesmo dado, como um gráfico de barras para gerenciamento e uma visão tabular para contadores. O controller faz a mediação da entrada, convertendo-a em comandos para o modelo ou visão. As ideias centrais por trás do MVC são a reusabilidade de código e separação de conceitos. – Wikipedia



![](https://i.imgur.com/gI6tXQX.png)


#### Model 
* Sempre que você pensar em manipulação de dados, pense em model. Ele é responsável pela leitura e escrita de dados, e também de suas validações.

#### View
* A camada de interação com o usuário. Ela apenas faz a  exibição dos dados, sendo ela por meio de um html ou xml.

#### Controller
* O responsável por receber todas as requisições do usuário. Seus métodos chamados actions são responsáveis por uma página, controlando qual model usar e qual view será mostrado ao usuário.



## Estrutura de arquivos

```
  MVC
  |
  |--assets/
  |  |--arquivos para estilo/
  |  
  |--controllers/
  |  |--all controllers/
  |
  |--lib/
  |  |--autoloader.php/
  |
  |--models/
  |  |--all models/
  |
  |--views/
  |  |--all views/
  |
  |--index.php/
  |
```

## Repositório

Todos os arquivos que estão disponíveis nesse repositório estão comentados para facilitar o entendimento do que está acontecendo no código e assim conseguir construir sua base de arquitetura MVC para facilitar na organização da sua aplicação.

## Licença


Este repositório está licenciado sob o MIT License - consulte o arquivo [LICENSE.md](LICENSE.md) para obter detalhes.
