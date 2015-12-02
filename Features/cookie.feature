Feature: Index

  Scenario: See a headband
    Given I am on homepage
    Then I should see an ".cc_banner-wrapper" element

  Scenario: Accept cookie
    Given: I am on homepage
    When I wait 2000 millisec
    And I click on ".cc_btn"
    Then I should not see an ".cc_banner-wrapper" element