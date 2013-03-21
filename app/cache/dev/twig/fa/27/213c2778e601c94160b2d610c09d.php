<?php

/* LamMdlBundle:Inscription:inscription.html.twig */
class __TwigTemplate_fa27213c2778e601c94160b2d610c09d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LamMdlBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LamMdlBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        if ($this->getContext($context, "message")) {
            // line 6
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
            echo "</p>
    ";
        }
        // line 8
        echo "    <h1>Inscription à une nouvelle formation</h1>
    <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LamMdlBundle_inscription"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
        ";
        // line 10
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
        <p>
            <button type=\"submit\">Ajout</button>
        </p>
    </form>

    <p>
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LamMdlBundle_homepage"), "html", null, true);
        echo "\">Retour</a>
    </p>

";
    }

    public function getTemplateName()
    {
        return "LamMdlBundle:Inscription:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  49 => 10,  43 => 9,  40 => 8,  34 => 6,  32 => 5,  29 => 4,  26 => 3,);
    }
}
