<?php

/* IutPlanningBundle:User:add.html.twig */
class __TwigTemplate_976946a2ecfae041b3840938afc472e761dfc3dceeaa73653defaa684adff89c extends Twig_Template
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
        echo "IutPlanningBundle:User:add";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Ajout d'utilisateur</h1>

";
    }

    public function getTemplateName()
    {
        return "IutPlanningBundle:User:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
