# danielle-about-me
PWP
My PWP project

## Milestone 1 Feedback
Excellent work identifying your purpose, audience, goal, persona and use case for your PWP. You've given thoughtful attention to detail in crafting a persona based upon the audience you intend to target for your web development business. This will provide you with a good guide as you move forward with the UI design and content strategy phases of this project.

You've set up your repository and directory structure exactly as outlined - nice work. Your HTML is looking great too. I see you've added some simple CSS rules, and I have a few notes for you about those in the Edits &amp; Suggestions section below.

Your Milestone 1 passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You are clear to begin work on Milestone 2&alpha; - although be advised there are upcoming lectures scheduled to cover information you will need for the wireframing process and mobile-first development. Start thinking of ideas for your layout on both desktop and mobile screens, and what content you want to feature on your site.

### Edits &amp; Suggestions
- Going forward, we strongly prefer using _external stylesheets_ over inline styles and styles included in the &lt;head&gt; tag. We haven't covered this yet - so don't sweat it, not holding this against you. we'll be covering this topic in depth in the CSS lectures this week.
- CSS rule on line 5 is missing the closing "}"

## Milestone 2&alpha; Feedback
Nice work - what you've created here will serve you as an effective guide for your development phase going forward. On Monday, I'll be covering the Bootstrap Challenge solution, along with tips for customizing Bootstrap's default appearance using CSS. 

I take note of the style of navigation that you have in your wireframe... there is no hidden "drawer-style" navigation component included in Bootstrap, so you'll need to look for an alternative way to build for your navigation in this style. Have a look at these jQuery-driven solutions:

- http://git.blivesta.com/drawer/
- https://slideout.js.org/
- https://simple-sidebar.github.io/simpler-sidebar/

For your back to top button, have a look at the one I created for bootcamp coders - it's made using jQuery. Have a look at the code here: https://bootcamp-coders.cnm.edu/lib/js/custom.js

(We'll be going over JavaScript soon!)

The Bootstrap thumbnail component might be a useful, albeit simple, solution for your gallery items: http://getbootstrap.com/components/#thumbnails

I recommend FontAwesome for iconography, and Google Fonts for custom typography.

Take a look at this method for creating phone links (for your phone icon at the bottom): https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#Creating_a_phone_link

Your Milestone 2a passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You are clear to begin development on your PWP. You'll want to build your PWP page in the following location: `public_html/index.php`, and the next Milestone will be a mid-development checkin.

### Edits &amp; Suggestions
- Missing `<meta charset="utf-8">` tag
- Avoid inline CSS whenever possible.

## Milestone 2&beta; Feedback
Great work! You're almost there. Detailed feedback given via Slack. Your Milestone 2b passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

## PWP Milestone 3 Feedback
This is a good start - but there are quite a few technical and styling issues that are causing this page to be ineffective on mobile devices.

When I load this page mobile, the major issues I see are that the navbar, social media links, and contact form aren't laying out properly, and the large text is just much too big. To get this page working right, you'll need to clean up some HTML issues and polish the styles for a more professional look and feel.

Here are the technical issues I see with the HTML structure:
- The closing `</head>` tag is missing.
- the `<title>` tag is missing.
- There's a horizontal scrollbar at the bottom of the page, and that usually tells me there's a problem with the Bootstrap grid. The `.bgimg-3` section is causing the issue. This section is missing a closing `</div>`, and the `.row` that houses the `#output-area` is also missing a closing tag, and is placed outside of a `.container`. It would be best to reformat this section. Close the tags properly, add a `.container` to this section, and place your contact form inside a row and column instead of using those funky custom padding rules - they're not working out on mobile.
- Remember to always use the `alt` attribute on images. (lines 145, 152)

I think the root of the styling issues are that there's a LOT of "*desktop-first*" CSS here... and it's just not working for smaller screens. Best to revisit things with a simpler "*mobile-first*" approach that addresses content and element layout first (using the Bootstrap grid to do most of the work), and design/styling second. Creating styles that work on ALL screen sizes first priority, following up with large screen styles inside `@media` queries second. This approach should alleviate some headaches in the process.

Here are some styling issues I see, and some pointers:
- On mobile screen sizes - zeroing out the margin on `.navbar-nav` and setting `padding-left: 0` on `.social-network` should fix your navbar layout on mobile. Apply desktop styles inside a `@media` query.
- Using the Bootstrap grid to size your contact form will make it mobile friendly. See notes on reformatting this section above. 
- The cyan font color is hard to read against the lighter backgrounds and images. The blues in the "Meet our Team" section don't match. I count four different font colors used on the page. Consider a simpler approach to color for a more effective style and more professional and polished look.
- Consider repositioning your photos? It looks like there's something missing on the right side.
- There's a method using flexbox to force those text boxes to be equal height on larger screens. Have a look at the HTML and CSS rules in this demo (note the branch name): https://github.com/rlewis2892/bootstrap-sandbox/tree/flexbox-columns
- Typo in "efficiant".
- Replace "Our Name" in the navbar with something, or remove it until you decide what you want.
- Link up all social media links if you can, and it's better to have those links open in a new tab using the `target="_blank"` attribute on them.

Your contact form appears to work fine - check your email and see if you received my test message. I would consider containing the error/success message output area in a smaller column - it's really really wide.

Keep working on this - it definitely takes practice. A page this simple shouldn't require wrestling with CSS too much - if that's the case, then a simpler approach is probably what's needed. For inspo on professional level design and styling, have a look at some of the bestsellers on https://themeforest.net/, as well as some of the featured sites on https://www.awwwards.com/.

Unfortunately because the layout and styling are not mobile friendly and responsive, I can only pass your Milestone 3 at [Tier I](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Make the changes above and have the page layout be fully responsive and mobile friendly by Demo Day (9/13/17), and I'll bump your score to Tier II. 

Your overall grade across all of your PWP Milestones is 23/40 points (57.5%).

- Milestone 1 - 20%: Tier IV 40(0.2) = 8
- Milestone 2a - 20%: Tier III 30(0.2) = 6
- Milestone 2b - 10%: Tier IV 40(0.1) = 4
- Milestone 3 - 50%: Tier I 10(0.5) = 5
