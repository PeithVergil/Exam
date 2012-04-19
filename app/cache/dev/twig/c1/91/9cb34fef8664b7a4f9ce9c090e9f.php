<?php

/* VirtualStaffExamBundle:Default:index.html.twig */
class __TwigTemplate_c1919cb34fef8664b7a4f9ce9c090e9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body_extra' => array($this, 'block_body_extra'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row-fluid\">
\t<div class=\"span12\">
\t\t<button id=\"btn-add\" class=\"btn btn-primary\">
\t\t\tAdd Record
\t\t</button>
\t\t<button id=\"btn-del\" class=\"btn btn-danger\">
\t\t\tDelete
\t\t</button>
\t\t<form id=\"form-records\">
\t\t\t<table id=\"records\" class=\"table table-bordered table-striped\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"col-all\">
\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"ckbx-all\" />
\t\t\t\t\t\t</th>
\t\t\t\t\t\t<th>ID</th>
\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t\t<th class=\"col-edt\">
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "records"));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 30
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"record[]\" value=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "record"), "id"), "html", null, true);
            echo "\" class=\"ckbx-usr\" />
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "record"), "id"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "record"), "usrnm"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "record"), "fname"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "record"), "lname"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-edt\" value=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "record"), "id"), "html", null, true);
            echo "\">Edit</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 43
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</form>
\t</div>
</div>
";
    }

    // line 50
    public function block_body_extra($context, array $blocks = array())
    {
        // line 51
        echo "
<div class=\"modal hide fade in\" id=\"mod-add\">
<form method=\"post\">
\t<div class=\"modal-header\">
\t\t<a class=\"close\" data-dismiss=\"modal\">×</a>
\t\t<h3>Add Record</h3>
\t</div>

\t<div class=\"modal-body\">
\t\t<div>
\t\t\t<label for=\"usrnm\">Username</label>
\t\t\t<input type=\"text\" name=\"usrnm\" id=\"usrnm\" />
\t\t\t<div class=\"clear\"></div>
\t\t</div>
\t\t<div>
\t\t\t<label for=\"fname\">First Name</label>
\t\t\t<input type=\"text\" name=\"fname\" id=\"fname\" />
\t\t\t<div class=\"clear\"></div>
\t\t</div>
\t\t<div>
\t\t\t<label for=\"lname\">Last Name</label>
\t\t\t<input type=\"text\" name=\"lname\" id=\"lname\" />
\t\t\t<div class=\"clear\"></div>
\t\t</div>

\t</div>

\t<div class=\"modal-footer\">
\t\t<input type=\"submit\" value=\"Save\" class=\"btn btn-primary\" />
\t</div>
</form>
</div>

<script type=\"text/template\" id=\"tpl-record-row\">
<tr>
\t<td>
\t\t<input type=\"checkbox\" name=\"record[]\" value=\"<%= record.usrid %>\" class=\"ckbx-usr\" />
\t</td>
\t<td><%= record.usrid %></td>
\t<td><%= record.usrnm %></td>
\t<td><%= record.fname %></td>
\t<td><%= record.lname %></td>
\t<td>
\t\t<a href=\"#\" class=\"btn btn-edt\" value=\"<%= record.usrid %>\">Edit</a>
\t</td>
</tr>
</script>

<script type=\"text/javascript\">
var URL_RECORD_ADD = \"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("record_add"), "html", null, true);
        echo "\";
var URL_RECORD_DEL = \"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("record_del"), "html", null, true);
        echo "\";
</script>
<script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/virtualstaffexam/js/exam.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "VirtualStaffExamBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
