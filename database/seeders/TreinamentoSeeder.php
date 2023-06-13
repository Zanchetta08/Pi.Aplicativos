<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Treinamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TreinamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Treinamento::create([
            'nome'=>'Treinamento de Laravel',
            'descricao'=>'O Laravel consiste em um framework back-end robusto que lhe oferece um time-to-market reduzido e também uma arquitetura de código muito organizada, o que facilita a manutenção de seu sistema e também o trabalho em equipe.

            Atualmente, o Laravel é considerado o maior Framework PHP existente. Esse status se dá devido à agilidade de programação de sistemas complexos envolvendo grande quantidade de recursos, tais como segurança, acesso a dados e arquitetura da aplicação. Todas essas características, que são básicas a qualquer sistema web, são fornecidas nativamente pelo Laravel de modo simples e intuitivo. ',
            'cargaHr'=>'24',
            'inscIni'=>Carbon::create('2023','07','01'),
            'inscFim'=>Carbon::create('2023','08','01'),
            'treiIni'=>Carbon::create('2023','09','03'),
            'treiFim'=>Carbon::create('2023','10','04'),
            'quantMin'=>'1',
            'quantMax'=>'30',
        ]);

        Treinamento::create([
            'nome'=>'Treinamento de PHP',
            'descricao'=>'Procurando se especializar como Programador WEB? Ou talvez buscando uma carreira que ofereça mais tempo livre e flexibilidade? Sempre teve curiosidade em aprender de uma forma prática, como programar no lado Back-End?  

            Qualquer que seja sua motivação você veio ao lugar certo.
            
            Este Curso de PHP 7 Completo vai proporcionar em um só lugar tudo o que precisa saber para criar seu próprio website. A equipe de instrutores da Hcode estará disponível para responder suas dúvidas. ',
            'cargaHr'=>'35',
            'inscIni'=>Carbon::create('2023','06','29'),
            'inscFim'=>Carbon::create('2023','07','01'),
            'treiIni'=>Carbon::create('2023','08','03'),
            'treiFim'=>Carbon::create('2023','09','04'),
            'quantMin'=>'5',
            'quantMax'=>'40',
        ]);

        Treinamento::create([
            'nome'=>'Treinamento de docker',
            'descricao'=>'Lembra aquela frase: “Só sei que funciona na minha máquina”? O velho e bom selo de qualidade "Works On My Machine"? Pois bem, seja bem vindo ao Curso que vai acabar com essa desculpa!

            Detalhando um pouco mais sobre o Docker, ele tem como tarefa central manipular os "containers". Ainda vou conceituar o que é container, mas a ideia é que o seu software possa ser executado em um ambiente isolado e que fique blindado o máximo possível de interferências externas. Rapidamente você perceberá que uma classe inteira de bugs será eliminada pela padronização entre o ambiente de desenvolvimento e o ambiente produtivo que o software será executado.
            
            Outra vantagem incrível é a facilidade de replicar um ambiente Dockerizado para dezenas/centenas de desenvolvedores. Esqueça as longas horas para configurar o seu sistema na máquina de um novo dev, Isso sem dúvida será coisa do passado.
            
            No curso você aprenderá os principais conceitos do Docker com vários exercícios práticos, todos descritos detalhadamente na apostila que será disponibilizada no curso. Tudo que for ministrado no curso estará disponível na apostila, e ter esse suporte a mais, será um diferencial fantástico.
            
            Para finalizar, quero convidar você que é desenvolvedor, DevOps, para nos acompanhar nessa caminhada com o Docker, não tenho dúvida que o nível que profissionalismo dos seus ambientes será outro depois das aulas.',
            'cargaHr'=>'40',
            'inscIni'=>Carbon::create('2023','07','01'),
            'inscFim'=>Carbon::create('2023','09','01'),
            'treiIni'=>Carbon::create('2023','10','03'),
            'treiFim'=>Carbon::create('2023','11','04'),
            'quantMin'=>'10',
            'quantMax'=>'50',
        ]);

        Treinamento::create([
            'nome'=>'Treinamento de Github',
            'descricao'=>'Já precisou criar pastas e pastas com os mesmos arquivos, só tendo uma pequena modificaçãozinha? Ou então entrou em desespero porque apagou um arquivo importante e não consegue mais recuperar? Bom, esses problemas são do passado, há muito tempo começaram a existir formas melhores de se trabalhar com versionamento para evitar esses tipos de coisas. Mas se há uma ferramenta imbatível e indispensável no quesito de versionamento, estamos falando do Git.

            Git é o sistema de controle de versão de arquivos mais utilizado no mundo. Através deles podemos desenvolver projetos na qual diversas pessoas podem contribuir simultaneamente no mesmo, editando e criando novos arquivos e permitindo que os mesmos possam existir sem o risco de suas alterações serem sobrescritas.
            
            Nesse curso iremos aprender como utilizar o Git em nossos projetos e como fazer a ligação do mesmo com o Github, a mais famosa rede social para código opensource.
            
            ',
            'cargaHr'=>'8',
            'inscIni'=>Carbon::create('2024','01','01'),
            'inscFim'=>Carbon::create('2024','01','15'),
            'treiIni'=>Carbon::create('2024','02','03'),
            'treiFim'=>Carbon::create('2024','02','19'),
            'quantMin'=>'1',
            'quantMax'=>'100',
        ]);
    }
}
