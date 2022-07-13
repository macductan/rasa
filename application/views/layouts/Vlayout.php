<?php
$data["base_url"] = base_url();
$data["template"] = $template;
$this->parser->parse('layouts/Vheader', $data);
$this->parser->parse($template, $data);
$this->parser->parse('layouts/Vfooter', $data);
