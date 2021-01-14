/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
define(["require","exports","./Enum/KeyTypes","jquery","nprogress","./Modal","./Severity","TYPO3/CMS/Core/SecurityUtility"],(function(e,t,n,i,r,o,a,l){"use strict";return new(function(){function e(){var e=this;this.securityUtility=new l,i((function(){e.registerEvents()}))}return e.prototype.registerEvents=function(){var e=this;i(document).on("click",".t3js-online-media-add-btn",(function(t){e.triggerModal(i(t.currentTarget))}))},e.prototype.addOnlineMedia=function(e,t){var n=e.data("target-folder"),l=e.data("online-media-allowed"),s=e.data("file-irre-object");r.start(),i.post(TYPO3.settings.ajaxUrls.online_media_create,{url:t,targetFolder:n,allowed:l},(function(e){if(e.file)window.inline.delayedImportElement(s,"sys_file",e.file,"file");else var t=o.confirm("ERROR",e.error,a.error,[{text:TYPO3.lang["button.ok"]||"OK",btnClass:"btn-"+a.getCssClass(a.error),name:"ok",active:!0}]).on("confirm.button.ok",(function(){t.modal("hide")}));r.done()}))},e.prototype.triggerModal=function(e){var t=this,r=e.data("btn-submit")||"Add",l=e.data("placeholder")||"Paste media url here...",s=i.map(e.data("online-media-allowed").split(","),(function(e){return'<span class="label label-success">'+t.securityUtility.encodeHtml(e.toUpperCase(),!1)+"</span>"})),d=e.data("online-media-allowed-help-text")||"Allow to embed from sources:",c=i("<div>").attr("class","form-control-wrap").append([i("<input>").attr("type","text").attr("class","form-control online-media-url").attr("placeholder",l),i("<div>").attr("class","help-block").html(this.securityUtility.encodeHtml(d,!1)+"<br>"+s.join(" "))]),u=o.show(e.attr("title"),c,a.notice,[{text:r,btnClass:"btn btn-primary",name:"ok",trigger:function(){var n=u.find("input.online-media-url").val();n&&(u.modal("hide"),t.addOnlineMedia(e,n))}}]);u.on("shown.bs.modal",(function(e){i(e.currentTarget).find("input.online-media-url").first().focus().on("keydown",(function(e){e.keyCode===n.KeyTypesEnum.ENTER&&u.find('button[name="ok"]').trigger("click")}))}))},e}())}));