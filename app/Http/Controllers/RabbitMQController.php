<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class RabbitMQController extends Controller
{
    public function enviarMensagem()
    {
        Log::info('Iniciando envio de mensagem para o RabbitMQ...');
        $connection = new AMQPStreamConnection(
            env('RABBITMQ_HOST'),
            env('RABBITMQ_PORT'),
            env('RABBITMQ_USER'),
            env('RABBITMQ_PASSWORD'),
            env('RABBITMQ_VHOST')
        );

        $channel = $connection->channel();
        $channel->queue_declare('fila-exemplo', false, true, false, false);

        $mensagem = new AMQPMessage('Olá, RabbitMQ! blz?');
        $channel->basic_publish($mensagem, '', 'fila-exemplo');

        $channel->close();
        $connection->close();
        Log::info('Mensagem enviada para o RabbitMQ com sucesso!');

        return response()->json(['status' => 'Mensagem enviada com sucesso!']);
    }
    
}


