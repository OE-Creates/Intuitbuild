<?php
	//echo "instructset_logic_script loaded successfully";
	
	echo "
		<div class='bg-danger p-1 my-1'><strong>IMPORTANT</strong></div>
		<strong><p class='text-danger'>Along with this build recommendation, you're going to need connector cables. A quick search for the name of the component and 'cables' should help you find the needed cables for the build.</p>
		<p class='text-danger'>While not necessary, you should have already purchased all the components listed in the Build Components List and have them all in your vicinity.</p>
		<p class='text-danger'>You'll also need Thermal Paste, make sure to buy from a reputtable brand. We recommended 'Noctua'.</p>
		<p class='text-danger'>No food or drinks should be in the vicinity. This is build time.</p></strong>
		
		<h5>Pre-Setup</h5>
		<p class='text-success'>Before you begin building the PC, makes sure that you have a clean workspace with lots of room to move around.</p>
		<p class='text-success'>You're going to need a screwdriver and some Alcohol spray. Optionally, you should have a desk mat or anti-static mat to work on.</p>
		
		<h5>The Motherboard</h5>
		<ul>
		<li class='text-secondary'>Unbox your motherboard and place it on top of its box.</li>
		<li class='text-secondary'>Open the CPU socket latch, <b class='text-success'>the manual for your motherboard should describe how to do this</b> (Feel free to use online resources if you bought a used component).</li>
		<li class='text-secondary'>Inspect the pins on the motherboard's CPU socket to make sure there are <b class='text-danger'>no bent pins</b> (LGA sockets only).</li>
		</ul>
		
		<h5>The CPU</h5>
		<ul>
		<li class='text-secondary'>Unbox your CPU. Once out of the box, <b class='text-danger'>DO NOT DROP IT</b>. Make sure to keep the plastic casing for future use.</li>
		<li class='text-secondary'>Avoid touching any of the gold pins on the CPU.</li>
		<li class='text-secondary'>Line the CPU up with the socket on the motherboard then <b class='text-success'>slowly and carefully</b> place it onto the pins, the proper orientation should be on the CPU box (Feel free to use online resources if you bought a used component).</li>
		<li class='text-secondary'>Once the CPU is properly seated, close the socket latch. The latch mechanism should feel a bit resistive to the force you apply.</li>
		</ul>
		
		<h5>The System RAM</h5>
		<ul>
		<li class='text-secondary'>Unbox your RAM and take a count of how many you have. Following our Build Components List should mean that you have a single set of 2 same brand RAM sticks.</li>
		<li class='text-secondary'>If you wish to purchase more, make sure to buy them in <b class='text-success'>dual</b> or <b class='text-success'>triple</b> pairs.</li>
		<li class='text-secondary'>Check your motherboard manual to determine what RAM slots to use, consider installing your RAM in even numbered slots for best stability (Feel free to use online resources if you bought a used component).</li>
		<li class='text-secondary'>For installation, push down on the tabs next to the RAM slots, insert your RAM stick and push down on it. <b class='text-success'>Use the notch on the RAM stick to determine the correct orientation, it should line up with the RAM slot</b>. The tabs should click back and lock the RAM stick in place if done right.</li>
		</ul>
		
		<h5>The Boot Drive</h5>
		<ul>
		<li class='text-secondary'>If the Build Components List specifies an SSD, then check to see if it's an M.2 SSD (Usually on the SSD label). If it is then now's the time to install it.</li>
		<li class='text-secondary'>Consult the motherboard manual to see where the M.2 slot is located, which is often hidden under heat sinks which you'll need to unscrew (Remember to take of the thermal pad from the removed heatsink) (Feel free to use online resources if you bought a used component).</li>
		<li class='text-danger'>Avoid connecting SATA based SSDs to an M.2 slot with the CPU label next to it</li>
		<li class='text-danger'>Avoid connecting NVMe based SSDs to an M.2 slot with the PCH label next to it</li>
		<li class='text-secondary'>The M.2 slot should come with a protruding stand-off, often with a small screw in it. If it doesn't check the motherboard box or purchase on before hand.</li>
		<li class='text-secondary'>Line up the SSD pins with the M.2 slot, use the notch in the pins to determine the orientation for the slot. Push the pins into the slot until you can't see them anymore.</li>
		<li class='text-secondary'>Push down on the opposite end of the SSD until it's flat and resting on the stand-off. Now screw in the small screw into the stand-off to hold the SSD in place.</li>
		<li class='text-secondary'>Proceed to screw back on the motherboard heatsink if it had one.</li>
		</ul>
		
		<h5>The Cooler</h5>
		<ul>
		<li class='text-secondary'>First you'll need to apply thermal paste unto the top of the CPU. A <b class='text-success'>very small</b> amount should be applied unto the center of the CPU surface.</li>
		<li class='text-danger'>Make sure to remove any protective stickers from the IHS (Integrated Heat Spreader) of your chosen cooler.</li>
		<li class='text-success'>Air Coolers</li>
		<li class='text-secondary'>The air cooler's manual is very important for this installation. This is due to the fact that there are different kinds of mounting brackets used by different coolers (Feel free to use online resources if you bought a used component).</li>
		<li class='text-secondary'>Once the cooler is properly seated, look for a CPU header on the motherboard name CPU FAN or something similar. Plug the coolers fan cables into this header.</li>
		<li class='text-success'>Water Coolers</li>
		<li class='text-secondary'>The water cooler's manual is very important for this installation. This is due to the fact that there are different kinds of mounting brackets used by different coolers (Feel free to use online resources if you bought a used component).</li>
		<li class='text-secondary'>Once the cooler is properly seated, look for a CPU header on the motherboard name CPU FAN or something similar. Plug the coolers RPM cables into this header.</li>
		<li class='text-secondary'>In both cases, you'll want to make sure the cooler is properly bolted down and secure. It's best to screw it in using little increments across all the screws to make sure the thermal paste is evenly spread around.</li>	
		</ul>
		
		<h5>Intermission</h5>
		<p class='text-success'>At this point you should try to turn on your system just to make sure everything is working correctly.</p>
		<p class='text-success'>For liquid coolers, you'll have to uninstall the cooler (after checking the system) before proceeding past this point.</p>
		<p class='text-success'>In order to power on the PC you'll need your Graphics Card and Power Supply (and it's cables).</p>
		
		<h5>The Graphics Card P1</h5>
		<ul>
		<li class='text-secondary'>Installed just like a RAM stick. Look for the long PCIe x16 slot on the motherboard then pull back its tabs. Make sure to remove any protective cover/stickers the Graphics Card has.</li>
		<li class='text-secondary'>Due to the Graphics Card being a lot bigger than a RAM stick, be sure to support the Graphics Card and keep it straight as you slide it into the slot.</li>
		<li class='text-secondary'>Once again, be sure to use the notch on the Graphics Card's pins to determine the orientation that the Card should face.</li>
		<li class='text-secondary'>Apply some force on the Graphics Card and the tabs will click, holding it in place just like with the RAM stick.</li>
		</ul>
		
		<h5>The Power Supply P1</h5>
		<ul>
		<li class='text-secondary'>Connect the power supply's 8 pin, 12 Volt cable into the primary power connector of your motherboard (Often marked as 'No. 1' if multiple connectors are available). It should easily slide right in, <b class='text-danger'>DO NOT FORCE IT IN</b>. Consult your motherboard manual for where this connector is (Feel free to use online resources if you bought a used component).</li>
		<li class='text-danger'>Connect any power connectors that your Graphics Card requires, <b class='text-danger'>All the power cables should be connected on the Graphics Card or it won't turn on</b>.</li>
		</ul>
		
		<p class='text-success'>Connect your display cable to the Graphics Card and connect a Keyboard to any IO ports on the motherboard. Consult your motherboard's manual to find them (Feel free to use online resources if you bought a used component).</p>
		<p class='text-success'>Look for a header on the motherboard named Power Switch (PWR_SW) or similar. Turn on your power supply.</p>
		<p class='text-success'>Go ahead and power on your PC by using the screw driver to <b class='tex-success'>gently</b> press down on the header.</p>
		
		<h5>Intermission: Boot Test</h5>
		<p class='text-danger'>If the PC does not boot up, go back to the top of this instruction list and make sure you have followed the process very carefully.</p>
		<p class='text-success'>If the PC does boot up, you'll want to press whatever button your motherboard comes with for displaying its BIOS/UEFI Firmware page.</p>
		<p class='text-success'>In the BIOS/UEFI Firmware screen, you'll want to make sure that your RAM, CPU, FANS and SSD are all detected. <b class='text-danger'>Detection often consitutes the BIOS/UEFI Firmware listing a component under each section</b>.</p>
		<p class='text-success'>Let the PC sit for a couple of minutes to make sure that the CPU temperatures are <b class='text-success'>OK</b>. The BIOS/UEFI Firmware should alert you if the temperatures are too high.</p>
		<p class='text-success'>Once this is done, you'll want to power off the computer from the BIOS/UEFI Firmware and turn off your power supply.</p>
		
		<h5>The Case</h5>
		<ul>
		<li class='text-secondary'>Unbox your case and move it to away from the components you've just been working with.</li>
		<li class='text-secondary'>Take of the side panel. Remove any hardware boxes within, if applicable, and set that aside for now.</li>
		<li class='text-secondary'>If your case came with an IO shield, now is the time to install it. Use the IO ports on you motherboard to determine its orientation then snap it into place on the designated opening on your case.</li>
		<li class='text-secondary'>Move any included cable to the opposite side of the opened panel and out of the way.</li>
		<li class='text-success'>Before proceeding, you'll want to remove the GPU from your motherboard as well as disconnecting the 8 pin, 12 Volt PS cables from earlier.</li>
		<li class='text-secondary'>Return to your case and look for stand-off, these look just like the M.2 stand-off from earlier but on the case or in the hardware box. Count how many there are.</li>
		<li class='text-secondary'>Return to your motherboard and look around it for screw hole openings, <b class=''>Make sure to find all of them</b>. Take note of where they are on the motherboard.</li>
		<li class='text-secondary'>Return to your case and make sure/unscrew and screw in the stand-offs into the same positions as seen on your motherboard.</li>
		<li class='text-secondary'>Now you want to <b class='text-success'>gently</b> lift your motherboard (with its cooler setup, RAM and SSD) and slowly place it into the case, following the stand-off orientation.</li>
		<li class='text-success'>You may need to remove the cooler block to reach some of the screw holes.</li>
		<li class='text-secondary'>Once the motherboard is properly situated, insert the screws at each stand-off point and tighten them all in small increments until they are all tightly fit.</li>
		<li class='text-secondary'>If you had to remove the cooler block, you may reattach it now, <b class='text-danger'>No need to reapply thermal paste</b>.</li>
		</ul>
		
		<h5>The Connectors</h5>
		<ul>
		<li class='text-danger'>Take care not to force any of these connectors in, they should slide in if placed correctly.</li>
		<li class='text-secondary'>If your case wasn't already seated up right, you'll want to do that now.</li>
		<li class='text-secondary'>Look for all the cables connected to the front panel headers within your case.</li>
		<li class='text-secondary'>If you've been following along with this Instruction List, these cables should all be at the back of your case.</li>
		<li class='text-secondary'>You'll want to grab them all and slink them around the back of your case to the part of your case thats closest to the motherboard Power Switch header.</li>
		<li class='text-secondary'>Consult your motherboard manual for what cables go into which headers, the cables will often have their names printed on their headers (Feel free to use online resources if you bought a used component).</li>
		<li class='text-secondary'>Make sure the cables are not obstructing any movable panels on the back of the case.</li>
		<li class='text-secondary'>At this point you should also connect the case USB and Audio jack cables as well, check you motherboard manual for where the headers are (Feel free to use online resources if you bought a used component).</li>
		<li class='text-danger'>DO NOT Plug the USB cable into any header on the motherboard called Firewire, FW or 1394.</li>
		</ul>
		
		<h5>The Storage</h5>
		<ul>
		<li class='text-secondary'>The PC case should come with unscrewable back panels for inserting Hard drives into them.</li>
		<li class='text-secondary'>If you wish to install additional SSD drives or HDD drives on the PC, do so using these panels.</li>
		<li class='text-secondary'>Make sure to screw in all bolts to hold the SSD/HDD in place before going any further.</li>
		<li class='text-secondary'>Now you want to connect these drives to the motherboard using the Serial ATA (SATA) cables that come with the motherboard (or that you bought).</li>
		<li class='text-secondary'>Consult your motherboard manual to find out what port on the motherboard the SATA cables go into (Feel free to use online resources if you bought a used component).</li>
		</ul>
		
		<h5>The Case Fans</h5>
		<ul>
		<li class='text-secondary'>Before installing any fans, you'll want to pay close attention to the direction the fan will blow air.</li>
		<li class='text-success'>Typically, you'll want hot air leaving the case from behind and cold air coming in from the front and bottom.</li>
		<li class='text-secondary'>On the Build Component List, you can see that 2 fans have been recommended for use in your build.</li>
		<li class='text-secondary'>The <b class='text-success'>Intake</b> fan usually goes at the bottom or at the front of the case. Installing these is as simple as making sure the air flow direction is pointing toward the interior of your case and then screwing them in with their provided bolts.</li>
		<li class='text-secondary'>The <b class='text-success'>Exhaust</b> fan usually goes at the back or at the top of the case. Installing these is as simple as making sure the air flow direction is pointing away from the interior of your case and then screwing them in with their provided bolts.</li>
		<br>
		<li class='text-secondary'>If a liquid cooler was recommended to you instead of an air cooler, then your radiator should be sitting outside your case right now. It's time to fit it into the case.</li>
		<li class='text-secondary'>You'll want to maneuver the radiator to the top of the case and make sure that any fans on it are configured to have their air flow facing toward the inside of the case. Simply screw it into place and your good to go.</li>
		<br>
		<li class='text-secondary'>Now, its time to connect all the fan cables to the motherboard. Consult your motherboard manual for the proper headers to use on your specific board (Feel free to use online resources if you bought a used component).</li>
		<li class='text-secondary'>If you run out of motherboard fan headers, you can purchase a fan hub that you can instead plug into the motherboard and then connect your fan cables to.</li>
		</ul>
		
		<h5>The Power Supply P2</h5>
		<ul>
		<li class='text-secondary'>Before proceeding, make sure your power supply is <b class='text-danger'>disconnected</b> from any power sources.</li>
		<li class='text-secondary'>Look at the back plate of your PC case. There should be an opening for your power supply.</li>
		<li class='text-secondary'>Some cases come with shields/covers for the Power Supply, if yours does, you should take it out now.</li>
		<li class='text-secondary'>Take out the screws next to the power supply opening. Take note of whether your case has an opening perpendicular(on the bottom of the case) to the power supply opening.</li>
		<li class='text-secondary'>If your case does, then you'll want to make sure that the fan within the power supply is facing downward toward that opening. However, if it doesn't, you'll want to make sure that the fan within the power supply is facing upward toward the interior of your case.</li>
		<li class='text-secondary'>Move the power supply unit into the case <b class='text-success'>gently</b>.</li>
		</ul>
		
		<h5>Final Wiring</h5>
		<ul>
		<li class='text-secondary'>It's time to fully wire up the components of your PC.</li>
		<li class='text-secondary'>First, you need to connect your GPU to the power supply. Look at the cable heads, a PSU marking means that head should be plugged into the power supply.</li>
		<li class='text-secondary'>Next. you need to connect your motherboard 8 pin, 12 Volt connector to the power supply. Take <b class='text-success'>great care</b> in making sure that each cable is fully connected before moving on to connect another.</li>
		<li class='text-secondary'>Connect the power supply's 24 pin ATX connectors to your motherboard's 24 pin connector. Use the peripheral cables/connectors to wire up any other components (Hard Drives, Fans) you may have in your PC that need direct power.</li>
		</ul>
		
		<h5>The Graphics Card P2</h5>
		<ul>
		<li class='text-secondary'>Now with every thing wired up, all that's left is for the GPU (which should be connected to the power supply already) to go into the case.</li>
		<li class='text-secondary'>On the back of the case there should be easily detachable GPU covers, take them of <b class='text-success'>gently</b>. Pull back on the tab at the end of the slots as well, if your case has one.</li>
		<li class='text-secondary'>Next, just like before, line up the Graphics Card pins with the appropriate PCIe x16 slot on your motherboard (Consult the motherboard manual for the correct slot), pull its tabs back and whilst keeping the Graphics Card straight, slot it right in. Apply a bit of force until the tabs click back into place.</li>
		<li class='text-secondary'>Support for the GPU is crucial. Your Graphics Card should now line up with the bracket containing screw holes for the GPU column, now would be a good time to screw those in. Your Graphics Card should have a pair of screws for this purpose.</li>
		<li class='text-secondary'>At this stage, you'll want to make sure that the Graphics Card is still properly connected to the power supply.</li>
		</ul>
		
		<h5>Cable Management</h5>
		<p class='text-secondary'>This is process by which you pack all the loose cables at the back of you PC case in a neat and compact way.</p>
		<p class='text-secondary'>How you chose to do this is up to you. Be <b class='text-danger'>VERY CAREFUL</b> not to pull hard on any of the cables. Simply guide then into place and tie them down with tape, rubber hoops or zip-ties.</p>
		<p class='text-secondary'>Once you're satisfied with your cable managed case, it's time to put the front panel that you took off earlier back on. Once that is done, your PC building journey is completed.</p>
		
		<h6 class='text-center text-success'>Congratulations, you've just finished building your PC</h6>
		<p class='text-secondary'>You can now move it <b class='text-success'>gently</b> into your workspace. Ask for help from others if you need to lift it, you wouldn't want to drop it now.</p>
		<p class='text-secondary'>Connect all your peripheral devices (Monitors, Speakers, Keyboards etc.).</p>
		<p class='text-secondary'>Once the PC is booted up, go back into the BIOS/UEFI Firmware page and make sure all the components are showing properly.</p>
		<p class='text-secondary'>If the PC did not boot up or certain components aren't showing up in the BIOS/UEFI Firmware page...</p>
		<ul>
		<li class='text-secondary'>Check all your connectors and make sure they are all properly pushed in.</li>
		<li class='text-secondary'>Try reinstalling you GPU and/or RAM sticks unto the motherboard.</li>
		<li class='text-secondary'>Try resitting your CPU heatsink, making sure the screws and mounting bracket are firmly secured.</li>
		</ul>
		";
?>