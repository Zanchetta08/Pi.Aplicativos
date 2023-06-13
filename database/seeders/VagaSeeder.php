<?php

namespace Database\Seeders;

use App\Models\Vaga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VagaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vaga::create([
            'titulo'=>'Desenvolvedor(a) Back-end Sênior',
            'empresa'=>'Hello world',
            'desc'=>'Somos uma empresa de tecnologia que aplica inovação em tudo aquilo que entrega. Existimos para ajudar nossos clientes a se adaptarem a um mundo em constante transformação.',
            'requisitos'=>'PHP / Laravel Framework / Banco de dados My SQL e phpMyAdmin / Docker / GitHub / Testes unitários / Electron ',
            'salario'=>'A Combinar',
        ]);

        Vaga::create([
            'titulo'=>'Estágio em Desenvolvedor de Softwares',
            'empresa'=>'Empresa 2',
            'desc'=>'Somos uma empresa de tecnologia que aplica inovação em tudo aquilo que entrega. Existimos para ajudar nossos clientes a se adaptarem a um mundo em constante transformação.',
            'requisitos'=>'PHP / Laravel Framework / Banco de dados My SQL e phpMyAdmin / Docker / GitHub / Testes unitários / Electron ',
            'salario'=>'1000R$ a 2000R$',
        ]);

        Vaga::create([
            'titulo'=>'Desenvolvedor Android Estágio (Vaga Remota)',
            'empresa'=>'Empresa 2',
            'desc'=>'Somos uma empresa de tecnologia que aplica inovação em tudo aquilo que entrega. Existimos para ajudar nossos clientes a se adaptarem a um mundo em constante transformação.',
            'requisitos'=>'PHP / Laravel Framework / Banco de dados My SQL e phpMyAdmin / Docker / GitHub / Testes unitários / Electron ',
            'salario'=>'900R$ a 2000R$',
        ]);

        Vaga::create([
            'titulo'=>'Estágio Full stack',
            'empresa'=>'Hello world',
            'desc'=>'Somos uma empresa de tecnologia que aplica inovação em tudo aquilo que entrega. Existimos para ajudar nossos clientes a se adaptarem a um mundo em constante transformação.',
            'requisitos'=>'PHP / Laravel Framework / Banco de dados My SQL e phpMyAdmin / Docker / GitHub / Testes unitários / Electron ',
            'salario'=>'1500R$ a 2000R$',
        ]);
    }
}
