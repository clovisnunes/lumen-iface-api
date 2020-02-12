<?php

use Laravel\Lumen\Testing\DatabaseTransactions;

class FilmeApiTest extends TestCase
{

    use DatabaseTransactions;

    public function testarListar()
    {
        $response = $this->call('GET', '/api/v1/filme/');
        $this->assertEquals(200, $response->status());
    }

    public function testarRetorno()
    {
        $this->get('/api/v1/filme/1')
            ->seeJson([
                "id"    => 1,
                "nome"  => "o hobbit",
                "ano"   => 2012
            ]);
    }

    public function testarCriar()
    {
        $response = $this->call('POST', '/api/v1/filme/', [
            "nome"  => "Nome do filme",
            "ano"   => 1234
        ]);

        $this->assertEquals(200, $response->status());
    }

    public function testarAtualizar()
    {
        $response = $this->call('POST', '/api/v1/filme/', [
            "nome"  => "Nome do filme",
            "ano"   => 1234
        ]);
        $this->assertEquals(200, $response->status());

        $filme_id = json_decode($response->getContent())->id;

        $novos_dados = [
            "id"    => $filme_id,
            "nome"  => "Novo nome",
            "ano"   => 2014
        ];

        $endp = '/api/v1/filme/' . $filme_id;
        $response = $this->json('PUT', $endp, $novos_dados)
        ->seeJson($novos_dados);
    }


    public function testarApagar()
    {
        $response = $this->call('POST', '/api/v1/filme/', [
            "nome"  => "Nome do filme",
            "ano"   => 1234
        ]);

        $filme_id = json_decode($response->getContent())->id;

        $this->json('DELETE', '/api/v1/filme/' . $filme_id)
            ->seeJsonEquals([
                'deleted' => true
            ]);
    }


}