<?php

/* AppBundle:Region:add.html.twig */
class __TwigTemplate_a3733fab2af6a9a80c0b9c4fb8057ab8e67cfe3be2c4beee104c654be8ef96ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Region:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar_left' => array($this, 'block_sidebar_left'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "isoftBet -ADD NEW REGION!";
    }

    // line 3
    public function block_sidebar_left($context, array $blocks = array())
    {
        // line 4
        echo "      ";
        $this->loadTemplate("AppBundle:Shared:sidebar-left.html.twig", "AppBundle:Region:add.html.twig", 4)->display($context);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"content\">
          <div class='row text-center'>
                <div class=\"col-md-12\">
                    <h2> Add New Region</h2>
                    <!--
                    <h2 class=\"text-left\">
                        <a href=\"\" class=\"btn btn-default\" style=\"float:right\">BACK TO CUSTOMER LIST</a>
                    </h2>
                    -->
                </div>
          </div>
          <div class='row'>
               <div class=\"col-md-12\">

                    <form method=\"post\" action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("region_add");
        echo "\" id=\"add_region_form\" name=\"add_region_form\" novalidate=\"1\">
                          <div class=\"form-group\">
                              <lable>Region Name</lable>
                              <input type=\"text\" id=\"region_name\" name=\"region_name\" required=\"required\" class=\"form-control\">
                          </div>
                          <div class=\"form-group\">
                              <lable>Max Member</lable>
                              <input type=\"text\" id=\"region_max_members\" name=\"region_max_members\" required=\"required\" class=\"form-control\">
                          </div>

                          <div class=\"form-group\">
                              <button type=\"submit\" class=\"btn btn-default\">Create Region</a>
                          </div>
                    </form>
              </div>
          </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Region:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  47 => 7,  44 => 6,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}isoftBet -ADD NEW REGION!{% endblock %}*/
/* {% block sidebar_left  %}*/
/*       {% include 'AppBundle:Shared:sidebar-left.html.twig' %}*/
/* {% endblock sidebar_left %}*/
/* {% block content  %}*/
/*     <div class="content">*/
/*           <div class='row text-center'>*/
/*                 <div class="col-md-12">*/
/*                     <h2> Add New Region</h2>*/
/*                     <!--*/
/*                     <h2 class="text-left">*/
/*                         <a href="" class="btn btn-default" style="float:right">BACK TO CUSTOMER LIST</a>*/
/*                     </h2>*/
/*                     -->*/
/*                 </div>*/
/*           </div>*/
/*           <div class='row'>*/
/*                <div class="col-md-12">*/
/* */
/*                     <form method="post" action="{{path('region_add')}}" id="add_region_form" name="add_region_form" novalidate="1">*/
/*                           <div class="form-group">*/
/*                               <lable>Region Name</lable>*/
/*                               <input type="text" id="region_name" name="region_name" required="required" class="form-control">*/
/*                           </div>*/
/*                           <div class="form-group">*/
/*                               <lable>Max Member</lable>*/
/*                               <input type="text" id="region_max_members" name="region_max_members" required="required" class="form-control">*/
/*                           </div>*/
/* */
/*                           <div class="form-group">*/
/*                               <button type="submit" class="btn btn-default">Create Region</a>*/
/*                           </div>*/
/*                     </form>*/
/*               </div>*/
/*           </div>*/
/*     </div>*/
/* {% endblock content%}*/
/* */
