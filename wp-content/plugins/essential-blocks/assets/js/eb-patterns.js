(()=>{var e="\n\t.eb-more-patterns-btn{\n\t\tmargin: 10px 20px;\n\t\tpadding: 12px 15px;\n\t\tdisplay: inline-block;\n\t\tcursor: pointer;\n\t\tbackground: #5d4fff;\n\t\tcursor: pointer;\n\t\tborder: 0;\n\t\tborder-radius: 4px;\n\t\tfont-size: 14px;\n\t\tcolor: #fff !important;\n\t\ttext-align: center;\n\t\ttext-decoration: none !important;\n\t}\n\t.eb-more-patterns-btn:hover{\n\t\tbackground: #493bed;\n\t}\n",t=document.createElement("style");t.innerText=e,document.head.appendChild(t),document.addEventListener("DOMContentLoaded",(function(){document.querySelector("body").addEventListener("change",(function(t){var n=document.querySelector(".block-editor-inserter__tabs .block-editor-inserter__panel-header .components-select-control__input");if(n&&"essential-blocks"===n.value.trim().toLowerCase()){var r,o,l=document.createElement("a");l.classList.add("eb-more-patterns-btn"),l.href="#";var a=document.createElement("style");a.innerText=e,document.head.appendChild(a);var i=null===(r=EssentialBlocksLocalize)||void 0===r?void 0:r.get_plugins["templately/templately.php"],c=null===(o=EssentialBlocksLocalize)||void 0===o||null===(o=o.get_plugins["templately/templately.php"])||void 0===o?void 0:o.active;c&&(l.innerHTML="See more in <strong>Templately</strong>",l.classList.add("templately-active")),!c&&i&&(l.innerHTML="Active <strong>Templately</strong> to get more",l.href=EssentialBlocksLocalize.eb_admin_url+"plugins.php",l.target="_blank"),c||i||(l.innerHTML="Install <strong>Templately</strong> to get more",l.href=EssentialBlocksLocalize.eb_admin_url+"plugin-install.php?s=templately&tab=search&type=term",l.target="_blank"),n.closest(".components-tab-panel__tab-content").append(l)}else(l=document.querySelector(".eb-more-patterns-btn"))&&l.remove();var s=document.querySelector(".eb-more-patterns-btn.templately-active");s&&s.addEventListener("click",(function(e){document.querySelector(".gutenberg-add-templately-button").click()}))}))}))})();