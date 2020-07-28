<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Storefront/storefront/component/checkout/offcanvas-item.html.twig */
class __TwigTemplate_7e8701b41f8497b36ec1b99e739b9c411a168c546a2aeed4568ef8452a091e49 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_offcanvas_cart_item_inner' => [$this, 'block_component_offcanvas_cart_item_inner'],
            'component_offcanvas_cart_item_container' => [$this, 'block_component_offcanvas_cart_item_container'],
            'component_offcanvas_product_image' => [$this, 'block_component_offcanvas_product_image'],
            'component_offcanvas_product_image_inner' => [$this, 'block_component_offcanvas_product_image_inner'],
            'component_offcanvas_product_details' => [$this, 'block_component_offcanvas_product_details'],
            'component_offcanvas_product_details_inner' => [$this, 'block_component_offcanvas_product_details_inner'],
            'component_offcanvas_product_label' => [$this, 'block_component_offcanvas_product_label'],
            'component_offcanvas_product_variants' => [$this, 'block_component_offcanvas_product_variants'],
            'component_offcanvas_product_quantity_price' => [$this, 'block_component_offcanvas_product_quantity_price'],
            'component_offcanvas_product_quantity' => [$this, 'block_component_offcanvas_product_quantity'],
            'component_offcanvas_product_quantity_form' => [$this, 'block_component_offcanvas_product_quantity_form'],
            'component_offcanvas_product_quantity_form_csrf' => [$this, 'block_component_offcanvas_product_quantity_form_csrf'],
            'component_offcanvas_product_quantity_form_redirect' => [$this, 'block_component_offcanvas_product_quantity_form_redirect'],
            'component_offcanvas_product_buy_quantity' => [$this, 'block_component_offcanvas_product_buy_quantity'],
            'component_offcanvas_product_total_price' => [$this, 'block_component_offcanvas_product_total_price'],
            'component_offcanvas_product_remove' => [$this, 'block_component_offcanvas_product_remove'],
            'component_offcanvas_product_remove_form' => [$this, 'block_component_offcanvas_product_remove_form'],
            'component_offcanvas_product_remove_form_csrf' => [$this, 'block_component_offcanvas_product_remove_form_csrf'],
            'component_offcanvas_product_remove_redirect' => [$this, 'block_component_offcanvas_product_remove_redirect'],
            'component_offcanvas_product_remove_submit' => [$this, 'block_component_offcanvas_product_remove_submit'],
            'component_offcanvas_cart_item_children' => [$this, 'block_component_offcanvas_cart_item_children'],
            'component_offcanvas_cart_item_child' => [$this, 'block_component_offcanvas_cart_item_child'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/checkout/offcanvas-item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Storefront/storefront/component/checkout/offcanvas-item.html.twig"));

        // line 1
        $this->displayBlock('component_offcanvas_cart_item_inner', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_component_offcanvas_cart_item_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_item_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_item_inner"));

        // line 2
        echo "    ";
        $context["price"] = twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "price", [], "any", false, false, false, 2);
        // line 3
        echo "    ";
        $context["isDiscount"] = ( !twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "good", [], "any", false, false, false, 3) && (twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "totalPrice", [], "any", false, false, false, 3) <= 0));
        // line 4
        echo "    ";
        $context["isNested"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "children", [], "any", false, false, false, 4), "count", [], "any", false, false, false, 4) > 0);
        // line 5
        echo "    ";
        $context["label"] = twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "label", [], "any", false, false, false, 5);
        // line 6
        echo "    ";
        $context["referencedId"] = twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "referencedId", [], "any", false, false, false, 6);
        // line 7
        echo "    ";
        $context["type"] = twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "type", [], "any", false, false, false, 7);
        // line 8
        echo "    ";
        $context["quantity"] = twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantity", [], "any", false, false, false, 8);
        // line 9
        echo "    ";
        $context["id"] = twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "id", [], "any", false, false, false, 9);
        // line 10
        echo "
    ";
        // line 11
        $this->displayBlock('component_offcanvas_cart_item_container', $context, $blocks);
        // line 187
        echo "
    ";
        // line 188
        $this->displayBlock('component_offcanvas_cart_item_children', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_component_offcanvas_cart_item_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_item_container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_item_container"));

        // line 12
        echo "        <div class=\"cart-item cart-item-";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        if (($context["isDiscount"] ?? null)) {
            echo " is-discount";
        }
        if (($context["isNested"] ?? null)) {
            echo " is-nested";
        }
        if (($context["isChild"] ?? null)) {
            echo " is-child";
        }
        echo " js-cart-item\">
            <div class=\"row cart-item-row\">
                ";
        // line 14
        $this->displayBlock('component_offcanvas_product_image', $context, $blocks);
        // line 57
        echo "
                ";
        // line 58
        $this->displayBlock('component_offcanvas_product_details', $context, $blocks);
        // line 152
        echo "
                ";
        // line 153
        $this->displayBlock('component_offcanvas_product_remove', $context, $blocks);
        // line 184
        echo "            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_component_offcanvas_product_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_image"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_image"));

        // line 15
        echo "                    <div class=\"col-auto\">
                        ";
        // line 16
        $this->displayBlock('component_offcanvas_product_image_inner', $context, $blocks);
        // line 55
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_component_offcanvas_product_image_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_image_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_image_inner"));

        // line 17
        echo "                            <div class=\"cart-item-img\">
                                ";
        // line 18
        if (($context["isDiscount"] ?? null)) {
            // line 19
            echo "                                    <div class=\"cart-item-discount-icon\">
                                        ";
            // line 20
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 20);
            })())->display(twig_array_merge($context, ["color" => "success", "name" => "marketing"]));
            // line 23
            echo "                                    </div>
                                ";
        } elseif (        // line 24
($context["isNested"] ?? null)) {
            // line 25
            echo "                                    <div class=\"cart-item-nested-icon\">
                                        ";
            // line 26
            ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 26);
            })())->display(twig_array_merge($context, ["color" => "light", "name" => "bag-product"]));
            // line 29
            echo "                                    </div>
                                ";
        } else {
            // line 31
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["referencedId"] ?? null)]), "html", null, true);
            echo "\"
                                       class=\"cart-item-img-link\"
                                       title=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "\">
                                        ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 34), "url", [], "any", false, false, false, 34)) {
                // line 35
                echo "                                            ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/thumbnail.html.twig"));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 35);
                })())->display(twig_array_merge($context, ["media" => twig_get_attribute($this->env, $this->source,                 // line 36
($context["lineItem"] ?? null), "cover", [], "any", false, false, false, 36), "sizes" => ["default" => "100px"], "attributes" => ["class" => "img-fluid cart-item-img-source", "alt" =>                 // line 42
($context["label"] ?? null), "title" =>                 // line 43
($context["label"] ?? null)], "name" => "cart-item-img-thumbnails"]));
                // line 46
                echo "                                        ";
            } else {
                // line 47
                echo "                                            ";
                ((function () use ($context, $blocks) {
                    $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                    $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

                    return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 47);
                })())->display(twig_array_merge($context, ["size" => "fluid", "name" => "placeholder"]));
                // line 50
                echo "                                        ";
            }
            // line 51
            echo "                                    </a>
                                ";
        }
        // line 53
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 58
    public function block_component_offcanvas_product_details($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_details"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_details"));

        // line 59
        echo "                    <div class=\"col cart-item-details\">
                        ";
        // line 60
        $this->displayBlock('component_offcanvas_product_details_inner', $context, $blocks);
        // line 150
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_component_offcanvas_product_details_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_details_inner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_details_inner"));

        // line 61
        echo "                            <div class=\"cart-item-details-container\">
                                ";
        // line 62
        $this->displayBlock('component_offcanvas_product_label', $context, $blocks);
        // line 77
        echo "
                                ";
        // line 78
        $this->displayBlock('component_offcanvas_product_variants', $context, $blocks);
        // line 90
        echo "
                                ";
        // line 91
        $this->displayBlock('component_offcanvas_product_quantity_price', $context, $blocks);
        // line 148
        echo "                            </div>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_component_offcanvas_product_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_label"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_label"));

        // line 63
        echo "                                    <div class=\"cart-item-details\">
                                        ";
        // line 64
        if ((($context["type"] ?? null) == "product")) {
            // line 65
            echo "                                            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Extension\SeoUrlFunctionExtension']->seoUrl("frontend.detail.page", ["productId" => ($context["referencedId"] ?? null)]), "html", null, true);
            echo "\"
                                               class=\"cart-item-label\"
                                               title=\"";
            // line 67
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "\">
                                                ";
            // line 68
            echo twig_escape_filter($this->env, ($context["quantity"] ?? null), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.quantityTimes"));
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["label"] ?? null)), "truncate", [0 => 60], "method", false, false, false, 68), "html", null, true);
            echo "
                                            </a>
                                        ";
        } else {
            // line 71
            echo "                                            <div class=\"cart-item-label\">
                                                ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(($context["label"] ?? null)), "truncate", [0 => 60], "method", false, false, false, 72), "html", null, true);
            echo "
                                            </div>
                                        ";
        }
        // line 75
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 78
    public function block_component_offcanvas_product_variants($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_variants"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_variants"));

        // line 79
        echo "                                    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 79), "options", [], "any", false, false, false, 79)) >= 1)) {
            // line 80
            echo "                                        <div class=\"cart-item-variants\">
                                            ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "payload", [], "any", false, false, false, 81), "options", [], "any", false, false, false, 81));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 82
                echo "                                                <div class=\"cart-item-variants-properties\">
                                                    <div class=\"cart-item-variants-properties-name\">";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "group", [], "any", false, false, false, 83), "html", null, true);
                echo ":</div>
                                                    <div class=\"cart-item-variants-properties-value\">";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "option", [], "any", false, false, false, 84), "html", null, true);
                echo "</div>
                                                </div>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "                                        </div>
                                    ";
        }
        // line 89
        echo "                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_component_offcanvas_product_quantity_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_quantity_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_quantity_price"));

        // line 92
        echo "                                    <div class=\"cart-quantity-price\">
                                        ";
        // line 93
        $this->displayBlock('component_offcanvas_product_quantity', $context, $blocks);
        // line 134
        echo "
                                        ";
        // line 135
        $this->displayBlock('component_offcanvas_product_total_price', $context, $blocks);
        // line 146
        echo "                                    </div>
                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 93
    public function block_component_offcanvas_product_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_quantity"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_quantity"));

        // line 94
        echo "                                            <div class=\"cart-item-quantity\">
                                                ";
        // line 95
        $this->displayBlock('component_offcanvas_product_quantity_form', $context, $blocks);
        // line 132
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_component_offcanvas_product_quantity_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_quantity_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_quantity_form"));

        // line 96
        echo "                                                    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantityInformation", [], "any", false, false, false, 96) && twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "stackable", [], "any", false, false, false, 96))) {
            // line 97
            echo "                                                        <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.change-quantity", ["id" => ($context["id"] ?? null)]), "html", null, true);
            echo "\"
                                                              class=\"cart-item-quantity-container\"
                                                              method=\"post\">

                                                            ";
            // line 101
            $this->displayBlock('component_offcanvas_product_quantity_form_csrf', $context, $blocks);
            // line 104
            echo "
                                                            ";
            // line 105
            $this->displayBlock('component_offcanvas_product_quantity_form_redirect', $context, $blocks);
            // line 110
            echo "
                                                            ";
            // line 111
            $context["quantityInformation"] = twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "quantityInformation", [], "any", false, false, false, 111);
            // line 112
            echo "                                                            ";
            if (twig_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "maxPurchase", [], "any", false, false, false, 112)) {
                // line 113
                echo "                                                                ";
                $context["maxQuantity"] = twig_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "maxPurchase", [], "any", false, false, false, 113);
                // line 114
                echo "                                                            ";
            } else {
                // line 115
                echo "                                                                ";
                $context["maxQuantity"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "config", [], "any", false, false, false, 115), "core", [], "any", false, false, false, 115), "cart", [], "any", false, false, false, 115), "maxQuantity", [], "any", false, false, false, 115);
                // line 116
                echo "                                                            ";
            }
            // line 117
            echo "
                                                            ";
            // line 118
            $this->displayBlock('component_offcanvas_product_buy_quantity', $context, $blocks);
            // line 129
            echo "                                                        </form>
                                                    ";
        }
        // line 131
        echo "                                                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_component_offcanvas_product_quantity_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_quantity_form_csrf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_quantity_form_csrf"));

        // line 102
        echo "                                                                ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.change-quantity");
        echo "
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_component_offcanvas_product_quantity_form_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_quantity_form_redirect"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_quantity_form_redirect"));

        // line 106
        echo "                                                                <input type=\"hidden\"
                                                                       name=\"redirectTo\"
                                                                       value=\"frontend.cart.offcanvas\"/>
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 118
    public function block_component_offcanvas_product_buy_quantity($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_buy_quantity"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_buy_quantity"));

        // line 119
        echo "                                                                <select name=\"quantity\"
                                                                        class=\"custom-select quantity-select-";
        // line 120
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo " js-offcanvas-cart-change-quantity\">
                                                                    ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "minPurchase", [], "any", false, false, false, 121), ($context["maxQuantity"] ?? null), twig_get_attribute($this->env, $this->source, ($context["quantityInformation"] ?? null), "purchaseSteps", [], "any", false, false, false, 121)));
        foreach ($context['_seq'] as $context["_key"] => $context["quantityItem"]) {
            // line 122
            echo "                                                                        <option value=\"";
            echo twig_escape_filter($this->env, $context["quantityItem"], "html", null, true);
            echo "\"
                                                                            ";
            // line 123
            if (($context["quantityItem"] == ($context["quantity"] ?? null))) {
                echo " selected=\"selected\"";
            }
            echo ">
                                                                            ";
            // line 124
            echo twig_escape_filter($this->env, $context["quantityItem"], "html", null, true);
            echo "
                                                                        </option>
                                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quantityItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                                                                </select>
                                                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 135
    public function block_component_offcanvas_product_total_price($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_total_price"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_total_price"));

        // line 136
        echo "                                            <div class=\"cart-item-price\">
                                                ";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "totalPrice", [], "any", false, false, false, 137)), "html", null, true);
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
        echo "
                                                ";
        // line 138
        $context["referencePrice"] = twig_get_attribute($this->env, $this->source, ($context["price"] ?? null), "referencePrice", [], "any", false, false, false, 138);
        // line 139
        echo "                                                ";
        if ( !(null === ($context["referencePrice"] ?? null))) {
            // line 140
            echo "                                                    <small class=\"cart-item-reference-price\">
                                                        (";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Core\Framework\Adapter\Twig\Filter\CurrencyFilter']->formatCurrency($context, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "price", [], "any", false, false, false, 141)), "html", null, true);
            echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\SwSanitizeTwigFilter']->sanitize($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("general.star"));
            echo " / ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "referenceUnit", [], "any", false, false, false, 141), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["referencePrice"] ?? null), "unitName", [], "any", false, false, false, 141), "html", null, true);
            echo ")
                                                    </small>
                                                ";
        }
        // line 144
        echo "                                            </div>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 153
    public function block_component_offcanvas_product_remove($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_remove"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_remove"));

        // line 154
        echo "                    <div class=\"col-2 cart-item-remove\">
                        ";
        // line 155
        $this->displayBlock('component_offcanvas_product_remove_form', $context, $blocks);
        // line 182
        echo "                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 155
    public function block_component_offcanvas_product_remove_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_remove_form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_remove_form"));

        // line 156
        echo "                            ";
        if (twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "removable", [], "any", false, false, false, 156)) {
            // line 157
            echo "                                <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("frontend.checkout.line-item.delete", ["id" => ($context["id"] ?? null)]), "html", null, true);
            echo "\"
                                      class=\"cart-item-remove js-offcanvas-cart-remove-product\"
                                      method=\"post\">

                                    ";
            // line 161
            $this->displayBlock('component_offcanvas_product_remove_form_csrf', $context, $blocks);
            // line 164
            echo "
                                    ";
            // line 165
            $this->displayBlock('component_offcanvas_product_remove_redirect', $context, $blocks);
            // line 170
            echo "
                                    ";
            // line 171
            $this->displayBlock('component_offcanvas_product_remove_submit', $context, $blocks);
            // line 179
            echo "                                </form>
                            ";
        }
        // line 181
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 161
    public function block_component_offcanvas_product_remove_form_csrf($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_remove_form_csrf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_remove_form_csrf"));

        // line 162
        echo "                                        ";
        echo $this->extensions['Shopware\Storefront\Framework\Twig\Extension\CsrfFunctionExtension']->createCsrfPlaceholder("frontend.checkout.line-item.delete");
        echo "
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 165
    public function block_component_offcanvas_product_remove_redirect($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_remove_redirect"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_remove_redirect"));

        // line 166
        echo "                                        <input type=\"hidden\"
                                               name=\"redirectTo\"
                                               value=\"frontend.cart.offcanvas\"/>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 171
    public function block_component_offcanvas_product_remove_submit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_remove_submit"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_product_remove_submit"));

        // line 172
        echo "                                        <button type=\"submit\"
                                                title=\"";
        // line 173
        echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("checkout.removeLineItem")), "html", null, true);
        echo "\"
                                                data-product-id=\"";
        // line 174
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lineItem"] ?? null), "id", [], "any", false, false, false, 174), "html", null, true);
        echo "\"
                                                class=\"btn btn-light cart-item-remove-button\">
                                            ";
        // line 176
        ((function () use ($context, $blocks) {
            $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

            $includeTemplate = $finder->find($finder->getTemplateName("@Storefront/storefront/utilities/icon.html.twig"));

            return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 176);
        })())->display(twig_array_merge($context, ["size" => "sm", "name" => "x"]));
        // line 177
        echo "                                        </button>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 188
    public function block_component_offcanvas_cart_item_children($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_item_children"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_item_children"));

        // line 189
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["lineItem"], "children", [], "any", false, false, false, 189));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["lineItem"]) {
            // line 190
            echo "            ";
            $this->displayBlock('component_offcanvas_cart_item_child', $context, $blocks);
            // line 195
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lineItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 190
    public function block_component_offcanvas_cart_item_child($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_item_child"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "component_offcanvas_cart_item_child"));

        // line 191
        echo "                ";
        $this->loadTemplate("@Storefront/storefront/component/checkout/offcanvas-item.html.twig", "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", 191)->display(twig_array_merge($context, ["isChild" => true]));
        // line 194
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/checkout/offcanvas-item.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  965 => 194,  962 => 191,  952 => 190,  942 => 196,  928 => 195,  925 => 190,  907 => 189,  897 => 188,  886 => 177,  878 => 176,  873 => 174,  869 => 173,  866 => 172,  856 => 171,  843 => 166,  833 => 165,  820 => 162,  810 => 161,  800 => 181,  796 => 179,  794 => 171,  791 => 170,  789 => 165,  786 => 164,  784 => 161,  776 => 157,  773 => 156,  763 => 155,  752 => 182,  750 => 155,  747 => 154,  737 => 153,  726 => 144,  715 => 141,  712 => 140,  709 => 139,  707 => 138,  702 => 137,  699 => 136,  689 => 135,  678 => 127,  669 => 124,  663 => 123,  658 => 122,  654 => 121,  650 => 120,  647 => 119,  637 => 118,  624 => 106,  614 => 105,  601 => 102,  591 => 101,  581 => 131,  577 => 129,  575 => 118,  572 => 117,  569 => 116,  566 => 115,  563 => 114,  560 => 113,  557 => 112,  555 => 111,  552 => 110,  550 => 105,  547 => 104,  545 => 101,  537 => 97,  534 => 96,  524 => 95,  513 => 132,  511 => 95,  508 => 94,  498 => 93,  487 => 146,  485 => 135,  482 => 134,  480 => 93,  477 => 92,  467 => 91,  457 => 89,  453 => 87,  444 => 84,  440 => 83,  437 => 82,  433 => 81,  430 => 80,  427 => 79,  417 => 78,  406 => 75,  400 => 72,  397 => 71,  388 => 68,  384 => 67,  378 => 65,  376 => 64,  373 => 63,  363 => 62,  352 => 148,  350 => 91,  347 => 90,  345 => 78,  342 => 77,  340 => 62,  337 => 61,  327 => 60,  316 => 150,  314 => 60,  311 => 59,  301 => 58,  290 => 53,  286 => 51,  283 => 50,  274 => 47,  271 => 46,  269 => 43,  268 => 42,  267 => 36,  259 => 35,  257 => 34,  253 => 33,  247 => 31,  243 => 29,  235 => 26,  232 => 25,  230 => 24,  227 => 23,  219 => 20,  216 => 19,  214 => 18,  211 => 17,  201 => 16,  190 => 55,  188 => 16,  185 => 15,  175 => 14,  163 => 184,  161 => 153,  158 => 152,  156 => 58,  153 => 57,  151 => 14,  136 => 12,  126 => 11,  116 => 188,  113 => 187,  111 => 11,  108 => 10,  105 => 9,  102 => 8,  99 => 7,  96 => 6,  93 => 5,  90 => 4,  87 => 3,  84 => 2,  65 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block component_offcanvas_cart_item_inner %}
    {% set price = lineItem.price %}
    {% set isDiscount = (not lineItem.good and price.totalPrice <= 0) %}
    {% set isNested = lineItem.children.count > 0 %}
    {% set label = lineItem.label %}
    {% set referencedId = lineItem.referencedId %}
    {% set type = lineItem.type %}
    {% set quantity = lineItem.quantity %}
    {% set id = lineItem.id %}

    {% block component_offcanvas_cart_item_container %}
        <div class=\"cart-item cart-item-{{ type }}{% if isDiscount %} is-discount{% endif %}{% if isNested %} is-nested{% endif %}{% if isChild %} is-child{% endif %} js-cart-item\">
            <div class=\"row cart-item-row\">
                {% block component_offcanvas_product_image %}
                    <div class=\"col-auto\">
                        {% block component_offcanvas_product_image_inner %}
                            <div class=\"cart-item-img\">
                                {% if isDiscount %}
                                    <div class=\"cart-item-discount-icon\">
                                        {% sw_icon 'marketing' style {
                                            'color': 'success'
                                        } %}
                                    </div>
                                {% elseif isNested %}
                                    <div class=\"cart-item-nested-icon\">
                                        {% sw_icon 'bag-product' style {
                                            'color': 'light'
                                        } %}
                                    </div>
                                {% else %}
                                    <a href=\"{{ seoUrl('frontend.detail.page', {'productId': referencedId}) }}\"
                                       class=\"cart-item-img-link\"
                                       title=\"{{ label }}\">
                                        {% if lineItem.cover.url %}
                                            {% sw_thumbnails 'cart-item-img-thumbnails' with {
                                                media: lineItem.cover,
                                                sizes: {
                                                    'default': '100px'
                                                },
                                                attributes: {
                                                    'class': 'img-fluid cart-item-img-source',
                                                    'alt': label,
                                                    'title': label
                                                }
                                            } %}
                                        {% else %}
                                            {% sw_icon 'placeholder' style {
                                                'size': 'fluid'
                                            } %}
                                        {% endif %}
                                    </a>
                                {% endif %}
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}

                {% block component_offcanvas_product_details %}
                    <div class=\"col cart-item-details\">
                        {% block component_offcanvas_product_details_inner %}
                            <div class=\"cart-item-details-container\">
                                {% block component_offcanvas_product_label %}
                                    <div class=\"cart-item-details\">
                                        {% if type == 'product' %}
                                            <a href=\"{{ seoUrl('frontend.detail.page', {'productId': referencedId}) }}\"
                                               class=\"cart-item-label\"
                                               title=\"{{ label }}\">
                                                {{ quantity }}{{ \"checkout.quantityTimes\"|trans|sw_sanitize }} {{ label|u.truncate(60) }}
                                            </a>
                                        {% else %}
                                            <div class=\"cart-item-label\">
                                                {{ label|u.truncate(60) }}
                                            </div>
                                        {% endif  %}
                                    </div>
                                {% endblock %}

                                {% block component_offcanvas_product_variants %}
                                    {% if lineItem.payload.options|length >= 1 %}
                                        <div class=\"cart-item-variants\">
                                            {% for option in lineItem.payload.options %}
                                                <div class=\"cart-item-variants-properties\">
                                                    <div class=\"cart-item-variants-properties-name\">{{ option.group }}:</div>
                                                    <div class=\"cart-item-variants-properties-value\">{{ option.option }}</div>
                                                </div>
                                            {% endfor %}
                                        </div>
                                    {% endif %}
                                {% endblock %}

                                {% block component_offcanvas_product_quantity_price %}
                                    <div class=\"cart-quantity-price\">
                                        {% block component_offcanvas_product_quantity %}
                                            <div class=\"cart-item-quantity\">
                                                {% block component_offcanvas_product_quantity_form %}
                                                    {% if lineItem.quantityInformation and lineItem.stackable %}
                                                        <form action=\"{{ path('frontend.checkout.line-item.change-quantity', {'id': id}) }}\"
                                                              class=\"cart-item-quantity-container\"
                                                              method=\"post\">

                                                            {% block component_offcanvas_product_quantity_form_csrf %}
                                                                {{ sw_csrf('frontend.checkout.line-item.change-quantity') }}
                                                            {% endblock %}

                                                            {% block component_offcanvas_product_quantity_form_redirect %}
                                                                <input type=\"hidden\"
                                                                       name=\"redirectTo\"
                                                                       value=\"frontend.cart.offcanvas\"/>
                                                            {% endblock %}

                                                            {% set quantityInformation = lineItem.quantityInformation %}
                                                            {% if quantityInformation.maxPurchase %}
                                                                {% set maxQuantity = quantityInformation.maxPurchase %}
                                                            {% else %}
                                                                {% set maxQuantity = shopware.config.core.cart.maxQuantity %}
                                                            {% endif %}

                                                            {% block component_offcanvas_product_buy_quantity %}
                                                                <select name=\"quantity\"
                                                                        class=\"custom-select quantity-select-{{ id }} js-offcanvas-cart-change-quantity\">
                                                                    {% for quantityItem in range(quantityInformation.minPurchase, maxQuantity, quantityInformation.purchaseSteps) %}
                                                                        <option value=\"{{ quantityItem }}\"
                                                                            {% if quantityItem == quantity %} selected=\"selected\"{% endif %}>
                                                                            {{ quantityItem }}
                                                                        </option>
                                                                    {% endfor %}
                                                                </select>
                                                            {% endblock %}
                                                        </form>
                                                    {% endif %}
                                                {% endblock %}
                                            </div>
                                        {% endblock %}

                                        {% block component_offcanvas_product_total_price %}
                                            <div class=\"cart-item-price\">
                                                {{ price.totalPrice|currency }}{{ \"general.star\"|trans|sw_sanitize }}
                                                {% set referencePrice = price.referencePrice %}
                                                {% if referencePrice is not null %}
                                                    <small class=\"cart-item-reference-price\">
                                                        ({{ referencePrice.price|currency }}{{ \"general.star\"|trans|sw_sanitize }} / {{ referencePrice.referenceUnit }}&nbsp;{{ referencePrice.unitName }})
                                                    </small>
                                                {% endif %}
                                            </div>
                                        {% endblock %}
                                    </div>
                                {% endblock %}
                            </div>
                        {% endblock %}
                    </div>
                {% endblock %}

                {% block component_offcanvas_product_remove %}
                    <div class=\"col-2 cart-item-remove\">
                        {% block component_offcanvas_product_remove_form %}
                            {% if lineItem.removable %}
                                <form action=\"{{ path('frontend.checkout.line-item.delete', {'id': id}) }}\"
                                      class=\"cart-item-remove js-offcanvas-cart-remove-product\"
                                      method=\"post\">

                                    {% block component_offcanvas_product_remove_form_csrf %}
                                        {{ sw_csrf('frontend.checkout.line-item.delete') }}
                                    {% endblock %}

                                    {% block component_offcanvas_product_remove_redirect %}
                                        <input type=\"hidden\"
                                               name=\"redirectTo\"
                                               value=\"frontend.cart.offcanvas\"/>
                                    {% endblock %}

                                    {% block component_offcanvas_product_remove_submit %}
                                        <button type=\"submit\"
                                                title=\"{{ \"checkout.removeLineItem\"|trans|striptags }}\"
                                                data-product-id=\"{{ lineItem.id }}\"
                                                class=\"btn btn-light cart-item-remove-button\">
                                            {% sw_icon 'x' style { 'size': 'sm' } %}
                                        </button>
                                    {% endblock %}
                                </form>
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endblock %}
            </div>
        </div>
    {% endblock %}

    {% block component_offcanvas_cart_item_children %}
        {% for lineItem in lineItem.children %}
            {% block component_offcanvas_cart_item_child %}
                {% sw_include '@Storefront/storefront/component/checkout/offcanvas-item.html.twig' with {
                    'isChild': true
                } %}
            {% endblock %}
        {% endfor %}
    {% endblock %}
{% endblock %}
", "@Storefront/storefront/component/checkout/offcanvas-item.html.twig", "/var/www/html/sw6/vendor/shopware/platform/src/Storefront/Resources/views/storefront/component/checkout/offcanvas-item.html.twig");
    }
}
