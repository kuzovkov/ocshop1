<?php

/* error/permission.twig */
class __TwigTemplate_a379945963c5e3ec45b72b73e08daea20769ec2d3eb1cef98c98a5f9c2c46e36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
<div class=\"page-header\">
  <div class=\"container-fluid\">
    <h1>";
        // line 5
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
    <ul class=\"breadcrumb\">
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
            echo "      <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ul>
  </div>
</div>
<div class=\"container-fluid\">
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\"><i class=\"fa fa-exclamation-triangle\"></i> ";
        // line 16
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
      <p class=\"text-center\">";
        // line 19
        echo (isset($context["text_permission"]) ? $context["text_permission"] : null);
        echo "</p>
    </div>
  </div>
</div>
";
        // line 23
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "error/permission.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 23,  61 => 19,  55 => 16,  47 => 10,  36 => 8,  32 => 7,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* <div class="page-header">*/
/*   <div class="container-fluid">*/
/*     <h1>{{ heading_title }}</h1>*/
/*     <ul class="breadcrumb">*/
/*       {% for breadcrumb in breadcrumbs %}*/
/*       <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* </div>*/
/* <div class="container-fluid">*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title"><i class="fa fa-exclamation-triangle"></i> {{ heading_title }}</h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*       <p class="text-center">{{ text_permission }}</p>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
