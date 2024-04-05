$(document).ready(function () {
    $('[data-bs-toggle="popover"]').popover();
});


$(document).ready(function () {
    var name = "SAWALINTO";
    function typeName(name, iteration) {
        if (iteration === name.length)
            return;
        setTimeout(function () {
            $('.name').text($('.name').text() + name[iteration++]);
            typeName(name, iteration);
        }, 200);
    }
    typeName(name, 0);
});


function openCity(evt, cityName) {
    var i, tabcontent, tablinks;


    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";


}
document.getElementById("defaultOpen").click();


function openProject(event, project) {
    var j, tabcontents, tablinkss;
    tabcontents = document.getElementsByClassName("tabcontents");
    for (j = 0; j < tabcontents.length; j++) {
        tabcontents[j].style.display = "none";
    }
    tablinkss = document.getElementsByClassName("tablinkss");
    for (j = 0; j < tablinkss.length; j++) {
        tablinkss[j].className = tablinkss[j].className.replace(" active", "");
    }
    document.getElementById(project).style.display = "block";
    event.currentTarget.className += " active";
}
document.getElementById("defaultPro").click();
(() => {
    'use strict'

    const getStoredTheme = () => localStorage.getItem('theme')
    const setStoredTheme = theme => localStorage.setItem('theme', theme)

    const getPreferredTheme = () => {
        const storedTheme = getStoredTheme()
        if (storedTheme) {
            return storedTheme
        }

        return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
    }

    const setTheme = theme => {
        if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.setAttribute('data-bs-theme', 'dark')
        } else {
            document.documentElement.setAttribute('data-bs-theme', theme)
        }
    }

    setTheme(getPreferredTheme())

    const showActiveTheme = (theme, focus = false) => {
        const themeSwitcher = document.querySelector('#bd-theme')

        if (!themeSwitcher) {
            return
        }

        const themeSwitcherText = document.querySelector('#bd-theme-text')
        const activeThemeIcon = document.querySelector('.theme-icon-active')
        const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
        const iconOfActiveBtn = btnToActive.querySelector('i').dataset.themeIcon
        // const iconOfActiveBtn = btnToActive.querySelector('i').getAttribute('href')

        document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
            element.classList.remove('active')
            element.setAttribute('aria-pressed', 'false')
        })

        btnToActive.classList.add('active')
        activeThemeIcon.classList.remove(activeThemeIcon.dataset.themeIconActive)
        activeThemeIcon.classList.add(iconOfActiveBtn)
        activeThemeIcon.dataset.iconActive = iconOfActiveBtn

      
    }

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
        const storedTheme = getStoredTheme()
        if (storedTheme !== 'light' && storedTheme !== 'dark') {
            setTheme(getPreferredTheme())
        }
    })

    window.addEventListener('DOMContentLoaded', () => {
        showActiveTheme(getPreferredTheme())

        document.querySelectorAll('[data-bs-theme-value]')
            .forEach(toggle => {
                toggle.addEventListener('click', () => {
                    const theme = toggle.getAttribute('data-bs-theme-value')
                    setStoredTheme(theme)
                    setTheme(theme)
                    showActiveTheme(theme, true)
                })
            })
    })
})()