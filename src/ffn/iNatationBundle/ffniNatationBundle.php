<?php

namespace ffn\iNatationBundle;

use http\Env\Response;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ffniNatationBundle extends Bundle
{
    public function accueilAction()
    {
        return new Response("notre propre hello wor ! ");
    }
}
