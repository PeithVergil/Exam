<?php

/* ::base.html.twig */
class __TwigTemplate_7194a5b9205f4d7d70dc101eefe4e4f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head_title' => array($this, 'block_head_title'),
            'head_extra' => array($this, 'block_head_extra'),
            'content' => array($this, 'block_content'),
            'body_extra' => array($this, 'block_body_extra'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>
\t\t";
        // line 5
        $this->displayBlock('head_title', $context, $blocks);
        // line 6
        echo "\t</title>
\t
\t<!-- Bootstrap CSS -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/virtualstaffexam/css/bootstrap/bootstrap.css"), "html", null, true);
        echo "\" />
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/virtualstaffexam/css/bootstrap/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
\t<!-- Bootstrap CSS -->
\t
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/virtualstaffexam/css/style.css"), "html", null, true);
        echo "\" />

\t<!--[if lt IE 9]>
\t\t<script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t<![endif]-->
\t
\t<script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/virtualstaffexam/js/jquery.js"), "html", null, true);
        echo "\"></script>
\t
\t<!-- Backbone and Underscore JS -->
\t<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/virtualstaffexam/js/backbone/underscore.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/virtualstaffexam/js/backbone/backbone.js"), "html", null, true);
        echo "\"></script>
\t<!-- Backbone and Underscore JS -->

\t<!-- Bootstrap JS -->
\t<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/virtualstaffexam/js/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/virtualstaffexam/js/bootstrap/bootstrap-modal.js"), "html", null, true);
        echo "\"></script>
\t<!-- Bootstrap JS -->

\t";
        // line 31
        $this->displayBlock('head_extra', $context, $blocks);
        // line 32
        echo "</head>

<body>
\t<div id=\"head\" class=\"navbar\">
\t\t<div class=\"navbar-inner\">
\t\t\t<div class=\"container\">
\t\t\t\t<a class=\"brand\" href=\"#\">
\t\t\t\t\tVirtualStaff Exam
\t\t\t\t</a>
\t\t\t\t<form action=\"\" class=\"navbar-search pull-left\">
\t\t\t\t\t<input type=\"text\" placeholder=\"Search\" class=\"search-query span3\">
\t\t\t\t</form>
\t\t\t\t
\t\t\t\t<ul class=\"nav pull-right\">
\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div id=\"body\">
\t\t<div class=\"container\">
\t\t\t";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "\t\t</div>
\t</div>

\t";
        // line 58
        $this->displayBlock('body_extra', $context, $blocks);
        // line 59
        echo "</body>
</html>
";
    }

    // line 5
    public function block_head_title($context, array $blocks = array())
    {
        echo "Hello, World!";
    }

    // line 31
    public function block_head_extra($context, array $blocks = array())
    {
    }

    // line 54
    public function block_content($context, array $blocks = array())
    {
    }

    // line 58
    public function block_body_extra($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
