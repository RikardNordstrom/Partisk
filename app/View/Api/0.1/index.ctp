<?php
/**
 * Copyright 2013-2014 Partisk.nu Team
 * https://www.partisk.nu/
 * 
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 * 
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 * 
 * @copyright   Copyright 2013-2014 Partisk.nu Team
 * @link        https://www.partisk.nu
 * @package     app.View.Questions
 * @license     http://opensource.org/licenses/MIT MIT
 */

$this->Html->addCrumb('Api');
?>

<h1>API</h1>
<p>Följande API används för att hämta ut frågor, svar, partier och taggar.</p>
<h2>Frågor</h2>
<table class="table table-striped table-bordered">
    <tr>
        <td><b>Alla frågor</b></td>
        <td><span>/api/<?php echo $version; ?>/questions</span></td>
        <td><a href="<?php echo Router::url('/', false); ?>api/<?php echo $version; ?>/questions/">Exempel</a></td>
    </tr>
    <tr>
        <td><b>Visa fråga</b></td>
        <td><span>/api/<?php echo $version; ?>/questions/{question_id}</span></td>
        <td><a href="<?php echo Router::url('/', false); ?>api/<?php echo $version; ?>/questions/18">Exempel</a></td>
    </tr>
</table>

<h2>Svar</h2>
<table class="table table-striped table-bordered">
    <tr>
        <td><b>Alla svar</b></td>
        <td><span>/api/<?php echo $version; ?>/answers</span></td>
        <td><a href="<?php echo Router::url('/', false); ?>api/<?php echo $version; ?>/answers/">Exempel</a></td>
    </tr>
    <tr>
        <td><b>Visa svar</b></td>
        <td><span>/api/<?php echo $version; ?>/answers/{answer_id}</span></td>
        <td><a href="<?php echo Router::url('/', false); ?>api/<?php echo $version; ?>/answers/18">Exempel</a></td>
    </tr>
</table>

<h2>Partier</h2>
<table class="table table-striped table-bordered">
    <tr>
        <td><b>Alla partier</b></td>
        <td><span>/api/<?php echo $version; ?>/parties</span></td>
        <td><a href="<?php echo Router::url('/', false); ?>api/<?php echo $version; ?>/parties/">Exempel</a></td>
    </tr>
    <tr>
        <td><b>Visa parti</b></td>
        <td><span>/api/<?php echo $version; ?>/parties/{party_id}</span></td>
        <td><a href="<?php echo Router::url('/', false); ?>api/<?php echo Configure::read('apiVersion'); ?>/parties/1">Exempel</a></td>
    </tr>
</table>

<h2>Taggar</h2>
<table class="table table-striped table-bordered">
    <tr>
        <td><b>Alla taggar</b></td>
        <td><span>/api/<?php echo $version; ?>/tags</span></td>
        <td><a href="<?php echo Router::url('/', false); ?>api/<?php echo $version; ?>/tags/">Exempel</a></td>
    </tr>
    <tr>
        <td><b>Visa tagg</b></td>
        <td><span>/api/<?php echo $version; ?>/tags/{tag_id}</span></td>
        <td><a href="<?php echo Router::url('/', false); ?>api/<?php echo $version; ?>/tags/35">Exempel</a></td>
    </tr>
</table>