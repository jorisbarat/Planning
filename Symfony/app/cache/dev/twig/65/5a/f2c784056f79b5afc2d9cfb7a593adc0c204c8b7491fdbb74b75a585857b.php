<?php

/* IutPlanningBundle:Users:add.html.twig */
class __TwigTemplate_655af2c784056f79b5afc2d9cfb7a593adc0c204c8b7491fdbb74b75a585857b extends Twig_Template
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
        echo "IutPlanningBundle:Users:add";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Ajout d'utilisateur</h1>

<form method=\"post\" action=\"save\">
<fieldset>
<p>
\tUsername : <input type=\"text\" name=\"Username\" />
</p>
<p>
\tPassword : <input type=\"password\" name=\"Password\" />
</p>
<p>
\t<input type=\"submit\" name=\"Enregistrer\" value=\"Enregistrer\"/>
</p>
</fieldset>
</form>

";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "IutPlanningBundle:Users:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  38 => 6,  35 => 5,  29 => 3,);
    }
}
