 
<!DOCTYPE html>
<html lang="en">

 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('backend/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="backend/plugins/fontawesome-free/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ url('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url('backend/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('backend/dist/css/adminlte.min2167.css?v=3.2.0')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('backend/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url('backend/plugins/summernote/summernote-bs4.min.css')}}">
 <!-- SweetAlert2 -->
 <link rel="stylesheet" href="{{ url('backend/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
 <!-- Toastr -->
 <link rel="stylesheet" href="{{ url('backend/plugins/toastr/toastr.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ url('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ url('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ url('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">


  <script data-cfasync="false" nonce="701d2cb2-8b16-4b42-87b1-77de0b79e682">try{(function(w,d){!function(df,dg,dh,di){if(df.zaraz)console.error("zaraz is loaded twice");else{df[dh]=df[dh]||{};df[dh].executed=[];df.zaraz={deferred:[],listeners:[]};df.zaraz._v="5847";df.zaraz._n="701d2cb2-8b16-4b42-87b1-77de0b79e682";df.zaraz.q=[];df.zaraz._f=function(dj){return async function(){var dk=Array.prototype.slice.call(arguments);df.zaraz.q.push({m:dj,a:dk})}};for(const dl of["track","set","debug"])df.zaraz[dl]=df.zaraz._f(dl);df.zaraz.init=()=>{var dm=dg.getElementsByTagName(di)[0],dn=dg.createElement(di),dp=dg.getElementsByTagName("title")[0];dp&&(df[dh].t=dg.getElementsByTagName("title")[0].text);df[dh].x=Math.random();df[dh].w=df.screen.width;df[dh].h=df.screen.height;df[dh].j=df.innerHeight;df[dh].e=df.innerWidth;df[dh].l=df.location.href;df[dh].r=dg.referrer;df[dh].k=df.screen.colorDepth;df[dh].n=dg.characterSet;df[dh].o=(new Date).getTimezoneOffset();if(df.dataLayer)for(const dq of Object.entries(Object.entries(dataLayer).reduce(((dr,ds)=>({...dr[1],...ds[1]})),{})))zaraz.set(dq[0],dq[1],{scope:"page"});df[dh].q=[];for(;df.zaraz.q.length;){const dt=df.zaraz.q.shift();df[dh].q.push(dt)}dn.defer=!0;for(const du of[localStorage,sessionStorage])Object.keys(du||{}).filter((dw=>dw.startsWith("_zaraz_"))).forEach((dv=>{try{df[dh]["z_"+dv.slice(7)]=JSON.parse(du.getItem(dv))}catch{df[dh]["z_"+dv.slice(7)]=du.getItem(dv)}}));dn.referrerPolicy="origin";dn.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(df[dh])));dm.parentNode.insertBefore(dn,dm)};["complete","interactive"].includes(dg.readyState)?zaraz.init():df.addEventListener("DOMContentLoaded",zaraz.init)}}(w,d,"zarazData","script");window.zaraz._p=async cY=>new Promise((cZ=>{if(cY){cY.e&&cY.e.forEach((c$=>{try{const da=d.querySelector("script[nonce]"),db=da?.nonce||da?.getAttribute("nonce"),dc=d.createElement("script");db&&(dc.nonce=db);dc.innerHTML=c$;dc.onload=()=>{d.head.removeChild(dc)};d.head.appendChild(dc)}catch(dd){console.error(`Error executing script: ${c$}\n`,dd)}}));Promise.allSettled((cY.f||[]).map((de=>fetch(de[0],de[1]))))}cZ()}));zaraz._p({"e":["(function(w,d){})(window,document)"]});})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script>
  
 </head>