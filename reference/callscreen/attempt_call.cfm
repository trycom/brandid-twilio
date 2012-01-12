<CFContent type="text/xml">
<cfsetting showdebugoutput="no">
<cfset numbers = ["<number to call 1>","<number to call 2>","<number to call n>"]>
<cfparam name="number_index" default="1">
<cfparam name="DialCallStatus" default="">
<cfinclude template="TwilioSettings.cfm" />
<cfset t = createObject("component", "TwilioLib").init(AccountSid, AuthToken) />

<cfset r = t.newResponse() />
<cfif DialCallStatus is not "completed" and number_index lte ArrayLen(numbers)>
	<cfset r.dial(action="attempt_call.cfm?number_index=#number_index+1#") />
	<cfset r.number(number=numbers[number_index], url="screen_for_machine.xml", childOf="dial") />
<cfelse>
	<cfset r.hangup()>
</cfif>

<cfoutput>#r.getResponseXml()#</cfoutput>