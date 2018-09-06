theme = (()=>{
    const THEMES = [
        "DEVRANT_DARK",
        "ALICE"
    ];

    let currentTheme = 0;

    function getCookie(){
        let value = document.cookie.replace(/(?:(?:^|.*;\s*)theme\s*=\s*([^;]*).*$)|^.*$/, "$1");
        // Confirm the value is in the THEMES array, otherwise add it.
        if( getThemeIdByName(value) === -1)
            THEMES.push(value);

        return value;
    }

    function setCookie(){
        document.cookie = `theme=${THEMES[currentTheme]}; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/`;
    }

    function getThemeIdByName(themeName){
        for( let i=0; i<THEMES.length; i++){
            if( THEMES[i] === themeName ){
                return i;
            }
        }
        return -1;
    }

    function nextTheme(){
        currentTheme++;
        if( currentTheme >= THEMES.length )
            currentTheme = 0;

        document.documentElement.setAttribute('theme', THEMES[currentTheme]);
        setCookie(THEMES[currentTheme]);
    }

    function setTheme(themeName){
        let id = getThemeIdByName(themeName.toString());
        if( id === -1 )
            return;

        currentTheme = id;
        document.documentElement.setAttribute('theme', THEMES[currentTheme]);
        setCookie(THEMES[currentTheme]);
    }

    function addTheme(themeName){
        THEMES.push(themeName.toString());
    }

    setTheme(getCookie());

    let themeSwitch = document.getElementById('theme-switch');
    if( themeSwitch )
        themeSwitch.addEventListener('click', nextTheme);

    return {
        nextTheme,
        setTheme,
        addTheme
    }
})();
