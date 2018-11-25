<?php

/* nav/nav.html.twig */
class __TwigTemplate_4926bfcc0613d0b797e7325abd888a5ce142ec70a8cb2913befde194a530af1e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nav/nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "nav/nav.html.twig"));

        // line 1
        echo "<ul class=\"nav\">
  <li class=\"nav-item\">
    <a class=\"nav-link active\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo "\">acceuil</a>
    </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contrebandier");
        echo " \">contrebandier</a>
  </li>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo " \">contact</a>
  
  <li class=\"nav-item\">
    <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
  </li>
</ul>
    
   
       ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "nav/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  39 => 6,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"nav\">
  <li class=\"nav-item\">
    <a class=\"nav-link active\" href=\"{{ path ('acceuil') }}\">acceuil</a>
    </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{ path('contrebandier') }} \">contrebandier</a>
  </li>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{ path('contact') }} \">contact</a>
  
  <li class=\"nav-item\">
    <a class=\"nav-link disabled\" href=\"#\">Disabled</a>
  </li>
</ul>
    
   
       ", "nav/nav.html.twig", "C:\\xampp\\php\\www\\projetPerso\\templates\\nav\\nav.html.twig");
    }
}
