<?php

/* IutPlanningBundle:Users:id.html.twig */
class __TwigTemplate_9f614a7872b87a9eeaa2ff0280de67655732d1bd7b291afc22edbee31b945a51 extends Twig_Template
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
        echo "IutPlanningBundle:User:id";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Welcome to the ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " page</h1>
";
    }

    public function getTemplateName()
    {
        return "IutPlanningBundle:Users:id.html.twig";
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
