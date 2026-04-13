<?php
echo view('layout/v_header');
echo view('layout/v_nav');
echo $this->renderSection('content');
echo view('layout/v_footer');