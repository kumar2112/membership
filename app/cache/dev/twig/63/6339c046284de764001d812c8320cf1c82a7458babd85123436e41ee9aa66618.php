<?php

/* AppBundle:Member:add.html.twig */
class __TwigTemplate_10bd8210e1907c0abc2f0bed69ef54cd670cd36af14a135b70f06acaf18d83ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Member:add.html.twig", 1);
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
        echo "isoftBet -ADD NEW MEMBER!";
    }

    // line 3
    public function block_sidebar_left($context, array $blocks = array())
    {
        // line 4
        echo "      ";
        $this->loadTemplate("AppBundle:Shared:sidebar-left.html.twig", "AppBundle:Member:add.html.twig", 4)->display($context);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"content\">
          <div class='row text-center'>
                <div class=\"col-md-12\">
                    <h2> Add New Member</h2>
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
        echo $this->env->getExtension('routing')->getPath("member_add");
        echo "\" id=\"member_add\" name=\"add_member_form\" novalidate=\"1\">
                          <div class=\"form-group\">
                              <lable>Member Name</lable>
                              <input type=\"text\" id=\"member_name\" name=\"member_name\" required=\"required\" class=\"form-control\">
                          </div>
                          <div class=\"form-group\">
                              <lable>Member Email</lable>
                              <input type=\"text\" id=\"member_email\" name=\"member_email\" required=\"required\" class=\"form-control\">
                          </div>
                          <div class=\"form-group\">
                              <lable>Member Phone</lable>
                              <input type=\"text\" id=\"member_phone\" name=\"member_phone\" required=\"required\" class=\"form-control\">
                          </div>
                          <div class=\"form-group\">
                              <lable>Member Address</lable>
                              <input type=\"text\" id=\"member_address\" name=\"member_address\" required=\"required\" class=\"form-control\">
                          </div>
                          <div class=\"form-group\">
                              <lable>Member Region</lable>
                              <select name=\"member_region\" id=\"member_region\" class=\"form-control\">
                                  ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regions"]) ? $context["regions"] : $this->getContext($context, "regions")));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 42
            echo "                                     <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "getId", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["region"], "getName", array()), "html", null, true);
            echo "</option>
                                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
                              </select>
                          </div>

                          <div class=\"form-group\">
                              <button type=\"submit\" class=\"btn btn-default\">Create Member</a>
                          </div>
                    </form>
              </div>
          </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AppBundle:Member:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 44,  90 => 42,  86 => 41,  63 => 21,  47 => 7,  44 => 6,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}isoftBet -ADD NEW MEMBER!{% endblock %}*/
/* {% block sidebar_left  %}*/
/*       {% include 'AppBundle:Shared:sidebar-left.html.twig' %}*/
/* {% endblock sidebar_left %}*/
/* {% block content  %}*/
/*     <div class="content">*/
/*           <div class='row text-center'>*/
/*                 <div class="col-md-12">*/
/*                     <h2> Add New Member</h2>*/
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
/*                     <form method="post" action="{{path('member_add')}}" id="member_add" name="add_member_form" novalidate="1">*/
/*                           <div class="form-group">*/
/*                               <lable>Member Name</lable>*/
/*                               <input type="text" id="member_name" name="member_name" required="required" class="form-control">*/
/*                           </div>*/
/*                           <div class="form-group">*/
/*                               <lable>Member Email</lable>*/
/*                               <input type="text" id="member_email" name="member_email" required="required" class="form-control">*/
/*                           </div>*/
/*                           <div class="form-group">*/
/*                               <lable>Member Phone</lable>*/
/*                               <input type="text" id="member_phone" name="member_phone" required="required" class="form-control">*/
/*                           </div>*/
/*                           <div class="form-group">*/
/*                               <lable>Member Address</lable>*/
/*                               <input type="text" id="member_address" name="member_address" required="required" class="form-control">*/
/*                           </div>*/
/*                           <div class="form-group">*/
/*                               <lable>Member Region</lable>*/
/*                               <select name="member_region" id="member_region" class="form-control">*/
/*                                   {% for region in regions %}*/
/*                                      <option value="{{region.getId}}">{{region.getName}}</option>*/
/*                                   {% endfor %}*/
/* */
/*                               </select>*/
/*                           </div>*/
/* */
/*                           <div class="form-group">*/
/*                               <button type="submit" class="btn btn-default">Create Member</a>*/
/*                           </div>*/
/*                     </form>*/
/*               </div>*/
/*           </div>*/
/*     </div>*/
/* {% endblock content%}*/
/* */
