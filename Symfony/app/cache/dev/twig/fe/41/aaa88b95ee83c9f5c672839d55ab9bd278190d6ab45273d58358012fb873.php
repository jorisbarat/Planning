<?php

/* IutPlanningBundle:Activity:add.html.twig */
class __TwigTemplate_fe41aaa88b95ee83c9f5c672839d55ab9bd278190d6ab45273d58358012fb873 extends Twig_Template
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
        echo "IutPlanningBundle:Activity:add";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Ajouter une activité</h1>

<form method=\"post\" action=\"saveActivity\">
<fieldset>
<p>
\tNom activité : <input type=\"text\" name=\"NameAct\" />
</p>
<p>
\t<input type=\"submit\" name=\"Enregistrer\" value=\"Enregistrer\"/>
</p>
</fieldset>
</form>

";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "IutPlanningBundle:Activity:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  38 => 6,  35 => 5,  29 => 3,);
    }
}
