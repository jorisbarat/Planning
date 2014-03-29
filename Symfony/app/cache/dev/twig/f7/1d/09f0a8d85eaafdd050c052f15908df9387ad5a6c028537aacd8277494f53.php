<?php

/* IutPlanningBundle:Planifier:add.html.twig */
class __TwigTemplate_f71d09f0a8d85eaafdd050c052f15908df9387ad5a6c028537aacd8277494f53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "IutPlanningBundle:Planifier:add";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Ajout dans le planning</h1>

<form action=\"savePlanifier\" method=\"post\">
<fieldset>
<p>
Username : <input type=texte name=\"Username\"/>
</p>

<p>
Activité : <input type=texte name=\"NameAct\"/>
</p>

<p>
<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css\">
<script src=\"//code.jquery.com/jquery-1.9.1.js\"></script>
<script src=\"//code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>
<link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
<datepicker type=\"grid\" value=\"YYYY/MM/DD\">
<script>
\$(function() {
\$( \"#datepicker\" ).datepicker();
\$( \"#datepicker\" ).datepicker(\"option\",\"dateFormat\",\"yy-mm-dd\");
});
</script>

<p>Date: <input type=\"text\" name=\"Date\" id=\"datepicker\"></p>

<label for=\"Heure\">Heure :</label>
<select name=\"Heure\" id=\"heure\">
<option value=8>8</option>
<option value=9>9</option>
<option value=10>10</option>
<option value=11>11</option>
<option value=12>12</option>
<option value=13>13</option>
<option value=14>14</option>
<option value=15>15</option>
<option value=16>16</option>
<option value=17>17</option>
<option value=18>18</option>
<option value=19>19</option>
<option value=20>20</option>
</select>
</p>

<br/>
<input type=\"submit\" name=\"submit\" value=\"valider\"/>
</p>
</fieldset>
</form> 
</body>
</html>



";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
        echo "
<p>
";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["activite"]) ? $context["activite"] : $this->getContext($context, "activite")), "idact", array(), "array"), "html", null, true);
        echo "
</p>
<?php
\techo \"<p>e</p>\"
?>
";
    }

    public function getTemplateName()
    {
        return "IutPlanningBundle:Planifier:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 63,  95 => 61,  38 => 6,  35 => 5,  29 => 3,);
    }
}
