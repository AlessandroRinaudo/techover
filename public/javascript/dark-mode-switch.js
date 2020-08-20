const darkSwitch = document.getElementById('darkSwitch');
window.addEventListener('load', () => {
  if (darkSwitch) {
    initTheme();
    darkSwitch.addEventListener('change', () => {
      resetTheme();
    });
  }
});


/**
 * Cette fonction met à jour la variable du navigateur
 * Si le bouton du thème noir a été activé il change l'attribut 'data-theme' html en
 * 'dark value'
 * @return {void}
 */
function initTheme()
{
  const darkThemeSelected =
    localStorage.getItem('darkSwitch') !== null &&
    localStorage.getItem('darkSwitch') === 'dark';
  darkSwitch.checked = darkThemeSelected;
  darkThemeSelected ? document.body.setAttribute('data-theme', 'dark') :
    document.body.removeAttribute('data-theme');
}


/**
 * Cette fonction vérifie si le bouton est active et si c'est le cas
 * il met l'attribut html 'data-time' = dark afin d'activer le thème noir
 * @return {void}
 */
function resetTheme()
{
  if (darkSwitch.checked)
  {
    document.body.setAttribute('data-theme', 'dark');
    localStorage.setItem('darkSwitch', 'dark');
  }
  else
  {
    document.body.removeAttribute('data-theme');
    localStorage.removeItem('darkSwitch');
  }
}
