(function(){'use strict';
for(const lab of document.querySelectorAll('.mm-lab')){
 const frame=lab.querySelector('[data-mm-frame]'),workspace=lab.querySelector('[data-mm-workspace]'),launcher=lab.querySelector('[data-mm-launcher]'),expand=lab.querySelector('[data-mm-expand]');
 const launch=()=>{if(location.protocol==='file:'){window.open(frame.dataset.src,'_blank','noopener,noreferrer');return;}if(!frame.getAttribute('src')){frame.src=frame.dataset.src;frame.hidden=false;launcher.hidden=true;expand.hidden=false;} };
 lab.querySelectorAll('[data-mm-launch]').forEach(el=>el.addEventListener('click',()=>{launch();if(el.tagName==='BUTTON')frame.focus();}));
 expand.addEventListener('click',async()=>{try{if(document.fullscreenElement){await document.exitFullscreen();}else if(workspace.requestFullscreen){await workspace.requestFullscreen();}else{window.open(frame.dataset.src,'_blank','noopener,noreferrer');}}catch{window.open(frame.dataset.src,'_blank','noopener,noreferrer');}});
 document.addEventListener('fullscreenchange',()=>{expand.textContent=document.fullscreenElement?'Riduci demo':'Espandi demo';});
 if(location.hash==='#titanium'&&location.protocol!=='file:')launch();
}
})();
