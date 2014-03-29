<?php

/* IutPlanningBundle:Activity:show.html.twig */
class __TwigTemplate_7aac901317714e9ce3da710d89091baa6e30814bd4e57259eba2bfa3a6409d72 extends Twig_Template
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
        echo "IutPlanningBundle:Activity:show";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the ";
        echo twig_escape_filter($this->env, (isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), "html", null, true);
        echo " page</h1>

";
    }

    public function getTemplateName()
    {
        return "IutPlanningBundle:Activity:show.html.twig";
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
