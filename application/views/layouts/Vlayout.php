<?php

$this->parser->parse('layouts/Vheader', $data);
$this->parser->parse($template, $data);
$this->parser->parse('layouts/Vfooter', $data);
